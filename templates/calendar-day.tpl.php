<?php
// $Id: calendar-day.tpl.php,v 1.7.2.10 2010/11/21 13:19:37 karens Exp $
/**
 * Template wird aus dem Module ueberschrieben, da in Zeile  10 das "%" hinter der ColWidth gefehlt hat
 */
//dsm('Display: '. $display_type .': '. $min_date_formatted .' to '. $max_date_formatted);
?>
<div class="calendar-calendar"><div class="day-view">
<table>
  <col width="<?php print $first_column_width?>%"></col>
  <?php foreach ($columns as $column): ?>
  <col width="<?php print $column_width; ?>%"></col>
  <?php endforeach; ?>
  <thead>
    <tr>
      <th class="calendar-dayview-hour"><?php print $by_hour_count > 0 ? t('Time') : ''; ?></th>
      <?php foreach ($columns as $column): ?>
      <th class="calendar-agenda-items"><?php print $column; ?></th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="<?php print $agenda_hour_class ?>">
         <span class="calendar-hour"><?php print $by_hour_count > 0 ? date_t('All day', 'datetime') : ''; ?></span>
       </td>
      <?php foreach ($columns as $column): ?>
       <td class="calendar-agenda-items">
         <div class="calendar">
         <div class="inner">
           <?php print isset($rows['all_day'][$column]) ? implode($rows['all_day'][$column]) : '&nbsp;';?>
         </div>
         </div>
       </td>
      <?php endforeach; ?>   
    </tr>
    <?php foreach ($rows['items'] as $hour): ?>
    <tr>
      <td class="calendar-agenda-hour">
        <span class="calendar-hour"><?php print $hour['hour']; ?></span>
        <span class="calendar-ampm"><?php print $hour['ampm']; ?></span>
      </td>
      <?php foreach ($columns as $column): ?>
        <td class="calendar-agenda-items">
          <div class="calendar">
          <div class="inner">
            <?php print isset($hour['values'][$column]) ? implode($hour['values'][$column]) : '&nbsp;'; ?>
          </div>
          </div>
        </td>
      <?php endforeach; ?>   
    </tr>
   <?php endforeach; ?>   
  </tbody>
</table>
</div></div>