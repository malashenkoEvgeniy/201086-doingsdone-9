
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
        <!--добавить сюда аттрибут "checked", если переменная $show_complete_tasks равна единице-->
        <input class="checkbox__input visually-hidden show_completed" <?php if($show_complete_tasks){ echo 'checked';}?> type="checkbox">
        <span class="checkbox__text">Показывать выполненные</span>
    </label>
</div>

<table class="tasks">
<?php foreach($doings as $cause){
				if($show_complete_tasks){ ?>
			<tr class="tasks__item task <?php if($cause['status']=='Да') echo 'task--completed';?>">
					<td class="task__select">
						<label class="checkbox task__checkbox">
							<input class="checkbox__input visually-hidden" type="checkbox" checked>
							<span class="checkbox__text"><?= $cause['task'];?></span>
						</label>
					</td>
					<td class="task__date"><?= $cause['date'];?></td>
					<td class="task__controls"><?= $cause['status'];?></td>
				</tr> <?php } else {
						if($cause['status']!=='Да'){	?>
				<tr class="tasks__item task <?php if(get_hour_date($cause['date'])<=24) echo 'task--important';
										?>">
					<td class="task__select">
							<label class="checkbox task__checkbox">
									<input class="checkbox__input visually-hidden" type="checkbox">
									<span class="checkbox__text"><?= $cause['task'];?></span>
							</label>
					</td>
					<td class="task__date"><?= $cause['date'];?></td>
					<td class="task__controls"><?= $cause['status'];?></td>
			</tr>
	<?php }
			}
		} ?>
</table>
