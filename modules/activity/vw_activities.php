<?php


require_once ($AppUI->getSystemClass('genericTable'));

global $search_string;
global $currentTabId;
global $currentTabName;
global $tabbed;
global $page;
global $orderby;
global $orderdir;
global $limit;

$gt = new genericTable(true);

$search = false;

$obj = new CActivity();

$where = $AppUI->getState( 'ContactIdxWhere' ) ? $AppUI->getState( 'ContactIdxWhere' ) : '%';

if ($where != '%') $search=true;

$q = new DBQuery;

/*
 * Removed for new version of table
 */
//$q->setLimit($limit, $offset  );
$q->addTable('activity', 'a');
$q->addQuery('a.activity_id, a.activity_pers_first_name, a.activity_pers_last_name, a.activity_pers_telephon, a.activity_pers_email, a.activity_name, a.activity_domaine, a.activity_strategies, a.activity_type_of_intervention, a.activity_start_date, a.activity_end_date, a.activity_type_of_beneficiery, a.activity_number_of_beneficiery');
//$q->addWhere("c.contact_first_name LIKE '$where%'");
//$q->addOrder($orderby.' '.$orderdir);
//$q->addWhere('contact_id <> "13"');

//$sql = $q->prepare();
//var_dump($sql);

$rows = $q->loadList();
//echo printPageNavigation( '?m=contacts', $page, $num_pages, $offset, $limit, $count, 'Staff');

$headers = array(
				'Activity Name'=> 'string',
		        'Start date'=>'string',
				'End date'=>'string',
				'Activity domaine'=>'string',
				'Strategies'=>'string',
				'Type of intervention'=>'string',
				'Type of beneficiery'=>'string',
		        'Number of beneficiery'=>'string',
);

$gt->makeHeader($headers);

$decs = array(  0=>'<a href = "index.php?m=activity&a=view&activity_id=##8##" > ##0##</a >'//,
		//		2=>'<a href="mailto:##2##">##2##</a>',
				//6=>'<a href ="?m=contacts&a=vcardexport&suppressHeaders=true&contact_id=##7##">##6##</a>'
);

$gt->setDecorators($decs);
$gt->setPageTitle("Activities");


$s = '';
$CR = "\n"; // Why is this needed as a variable?
$none = true;
$formgeo = '<form name="changecontact" action="?m=outputs&a=map" method="post">
		        <input type="hidden" name="type" value="activity" />
		        <input type="hidden" name="query" value="all" />
				<input type="submit" name="del" value="'.$AppUI->_('Localisation').'" />'.
				' <a href="?m=activity&a=addedit">' . $AppUI->_('New activity').'</a>'.
			'</form>'; 
if ($canEdit) {
		$gt->setToolBar(
			$formgeo
			/*'<a href="./index.php?m=contacts&a=csvexport&suppressHeaders=true">' . $AppUI->_('CSV Download') . "</a>".
			'<a href="./index.php?m=contacts&a=vcardimport&dialog=0">' . $AppUI->_('Import vCard') . '</a>'*/
		);
}
//$row_data = array();
//$nfei = new evolver();

function getStrategies($strategies){
	$rep = '';
	if($strategies){
		$q = new DBQuery();
		$q->addTable ('st_area', 'st' );
		//$q->addQuery ( 'st.title','st.prex' );
		//cho @$row->activity_administration_section;
		$q->addWhere('st.id in ('.$strategies.')');
		$q->addOrder('st.prex');
		$strategies = $q->loadList();
		if(count($strategies)){
			$rep ='<ul >';
			for($i=0;$i<count($strategies);$i++)
				$rep .= '<li>'.$strategies[$i]['prex'].'.-'.$strategies[$i]['title'].'</li>';
			$rep .= '</table>';
		}
	}
	return $rep;
}
$TypeOfIntervention = dPgetSysVal('TypeOfIntervention');
function interventionType($intervention){
	$rep = '';
	if(count($intervention)){
		$rep .= '<ul>';
		for($i=0;$i<count($intervention);$i++)
			$rep .= '<li>'.$TypeOfIntervention[$intervention[$i]].'</li>';
		$rep .= '</ul>';
	}
	return $rep;
}
$TypeOfBeneficiery = dPgetSysVal('TypeOfBeneficiery');
function beneficieryType($type){
	$rep = '';
	if(count($type)){
		$rep .= '<ul>';
		for($i=0;$i<count($type);$i++)
			$rep .= '<li>'.$TypeOfBeneficiery[$type[$i]].'</li>';
		$rep .= '</ul>';
	}
	return $rep;
}
$ActivityDomaine = dPgetSysVal('ActivityDomaine');
foreach ($rows as $rid => $row)
{
	//break;
	$obj = & new CActivity();
	$obj->load($row["activity_id"]);
	
	//$url
	//$obj->getUrl('view') 

	$row_data = array(
			$obj->activity_name,
			$obj->activity_start_date,
			$obj->activity_end_date,
			$ActivityDomaine[$obj->activity_domaine],
			getStrategies($obj->activity_strategies),
			interventionType(explode(',',$obj->activity_type_of_intervention)),
			beneficieryType(explode(',',$obj->activity_type_of_beneficiery)),
			$obj->activity_number_of_beneficiery,
			$obj->activity_id
	);
	$gt->fillBody($row_data);
	$none = false;
	/*
	$s='';
	$s .= $CR . '<tr id="row_'.$rid.'">';
	$s .= $CR . '<td ><a href="index.php?m=contacts&a=view&contact_id='. $obj->contact_id .  '" title="'.$obj->contact_description.'">' . $row_data[$rid][0] .'</a></td>';
	$s .= $CR . '<td >' . $row_data[$rid][1] . '</td>';
	$s .= $CR . '<td ><a href="mailto:' . $row_data[$rid][2] . '">'.$row_data[$rid][2] . '</td>';
	$s .= $CR . '<td >' . $row_data[$rid][3] . '</td>';
	$s .= $CR . '<td >' . $row_data[$rid][4] . '</td>';
	$s .= $CR . '<td >' . $row_data[$rid][5] . '</td>';
	$s .= $CR . '<td align="center""><a href ="?m=contacts&a=vcardexport&suppressHeaders=true&contact_id='. $obj->contact_id . '"> (vCard)</a></td>';
	
	//$s .= $CR . '<td align="center" nowrap="nowrap"><a title=" ' . $AppUI->_('Export vCard for').' '. $obj->contact_first_name .' '.$obj->contact_last_name . '" href="?m=contacts&a=vcardexport&suppressHeaders=true&contact_id= ' .  $obj->contact_id . '>(vCard)</a></td>';
	$s .= $CR . '</tr>';
	$gt->addTableHtmlRow($s);*/
}

if ($none){
	$gt->addTableHtmlRow($CR . '<tr><td colspan="5">' . $AppUI->_( 'No contacts available' ) . '</td></tr>');
}


$gt->compile();
//   echo printPageNavigation( '?m=contacts', $page, $num_pages, $offset, $limit, $count, 'Staff');