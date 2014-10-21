<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_hbpartnerclub/css/default.css');
?>

	
<?php 
echo "<div class=\"partnerclubBox\">";
echo '<a href="http://www.vfl-ostdorf.de/prod/">';
echo '<img src="'.JURI::base().'modules/mod_hbpartnerclub/images/vfl-tsv.png" alt="VfL Ostdorf" />';
echo '</a>';
echo '<p>'.$text.'</p';

echo '</div';

?>