<h2 class="content__main-heading">Список задач</h2>
<form class="search-form" action="index.php" method="post" autocomplete="off">
  <input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">
  <input class="search-form__submit" type="submit" name="" value="Искать">
</form>
<div class="tasks-controls">
  <nav class="tasks-switch">
    <a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
    <a href="/" class="tasks-switch__item">Повестка дня</a>
    <a href="/" class="tasks-switch__item">Завтра</a>
    <a href="/" class="tasks-switch__item">Просроченные</a>
  </nav>
  <label class="checkbox">
  <input class="checkbox__input visually-hidden show_completed" type="checkbox" <?php
				 
if ($show_complete_tasks): ?>checked<?php endif ?>>
        <span class="checkbox__text">Показывать выполненные</span>
  </label>
</div>
<table class="tasks">
 <?php
  foreach($doings as $cause):
 	 if (!$cause['status'] || ($cause['status'] && $show_complete_tasks === 1)): ?>
		 <tr class="tasks__item task
		 <?php if ($cause['status']): ?>task--completed<?php endif;
					 if (get_hour_date($cause['dt_end']) <= 24 && !$cause['status']): ?>task--important<?php endif ?>">
			 <td class="task__select">
				 <label class="checkbox task__checkbox">
					 <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1">
					 <span class="checkbox__text"><?=htmlspecialchars($cause['name']);?></span>
				 </label>
			 </td>
			<td class="task__file">
				 <a class="download-link" href="#"><?php get_hour_date($cause['dt_end']);
					 if($cause['file'] !== NULL): echo strip_tags($cause['file']); endif; ?></a>
			</td>
			<td class="task__date"><?=$cause['dt_end'];?></td>
		 </tr>
		<?php endif;
	endforeach; ?>
</table>
