<?php
/**
 * MyBB 1.6 Russian Language Pack
 * Copyright 2012 4fingersleft.pp.ua / mybbforum.ru / root.spb.ru/mybb, All Rights Reserved
 * This is a Russian MyBB Translation, version 1.2-beta /21.04.2012/ done by nirvana, Chulik, mybbforum.ru, ferm32
 * $Id: reputation.lang.php 5750 2012-03-09 12:21:10Z Tomm$
 */

$l['nav_reputation'] = "Сводная информация о репутации";
$l['nav_profile'] = "Профиль {1}";
$l['reputation_disabled'] = "Вы не можете использовать систему оценки репутации, так как она была отключена Администратором.";

$l['reputation'] = "Репутация";
$l['error'] = "Ошибка";
$l['add_no_uid'] = "Вы не указали пользователя, репутацию которого хотите оценить.";
$l['add_no_permission'] = "Вам не разрешено оценивать репутацию пользователя.";
$l['add_disabled'] = "Вы не можете оценивать репутацию пользователя данной группы.";
$l['add_yours'] = "Вы не можете оценить собственную репутацию.";
$l['add_invalidpower'] = "Вы выбрали неверный пункт из списка.";
$l['add_maxperday'] = "За сегоднешний дней Вы исчерпали возможности для оценки репутаций пользователей.";
$l['add_maxperuser'] = "За сегодняшний день Вы уже в достаточной мере оценили репутацию этого пользователя.";
$l['add_maxperthread'] = "За сегодняшний день Вы уже в достаточной мере оценили репутацию этого пользователя в данной теме.";
$l['add_no_comment'] = "Чтобы оценить репутацию этого пользователя репутацию, Вам необходимо ввести комментарий не менее 10 символов.";
$l['add_toolong'] = "Вам необходимо изложить причину, уложившись в {1} символов.";
$l['add_negative_disabled'] = "Хорошие оценки отключены Администратором.";
$l['add_neutral_disabled'] = "Нейтральные оценки отключены Администратором.";
$l['add_positive_disabled'] = "Плохие оценки отключены Администратором.";
$l['add_all_rep_disabled'] = "Администратор отключил все оценки репутации. Вы не сможете оценить этого пользователя.";
$l['reputation_report'] = "Репутация {1}";
$l['reputation_members'] = "Репутацию оценивали:";
$l['reputation_posts'] = "Оценки сообщений:";
$l['summary'] = "Сводка";
$l['total_reputation'] = "Итоговая репутация";
$l['post_reputation'] = "Оценки сообщений";
$l['positive_count'] = "Хороших";
$l['neutral_count'] = "Нейтральных";
$l['negative_count'] = "Плохих";
$l['last_week'] = "За последнюю неделю";
$l['last_month'] = "За последний месяц";
$l['last_6months'] = "За последние 6 месяцев";
$l['comments'] = "Комментарии";
$l['close_window'] = "Закрыть окно";
$l['go_back'] = "Назад";
$l['add_reputation_vote'] = "Добавить оценку репутации рейтинг {1}";
$l['add_reputation_to_post'] = "Эта оценка за сообщение ползователя {1}.<br />";
$l['neg_rep_disabled'] = "<span class=\"smalltext\">* - <em>В настоящее время плохие оценки отключены</em></span>";
$l['pos_rep_disabled'] = "<span class=\"smalltext\">* - <em>В настоящее время хорошие оценки отключены</em></span>";
$l['neu_rep_disabled'] = "<span class=\"smalltext\">* - <em>В настоящее время нейтральные оценки отключены</em></span>";
$l['no_comment_needed'] = "Вы хотите оценить этого пользователя за его сообщение, которое связано с его профилем. Комментарий необязателен, но если Вы хотите его оставить, пожалуйста, сделайте его ниже.<br />";
$l['no_comment'] = "[Без комментариев]";
$l['vote_added'] = "Оценивание выполнено";
$l['vote_updated'] = "Оценка обновлена";
$l['vote_deleted'] = "Оценка удалена";
$l['vote_added_message'] = "Ваша оценка успешно добавлена в репутацию этого пользователю.";
$l['vote_updated_message'] = "Репутация этого пользователя успешно изменена.";
$l['vote_deleted_message'] = "Ваша оценка этого ползователя удалена.";
$l['update_reputation_vote'] = "Обновление Вашей оценки пользователя {1}";
$l['positive'] = "+ Хорошо";
$l['negative'] = "- Плохо";
$l['neutral'] = "Нейтрально";
$l['user_comments'] = "Ваши комментарии у {1}:";
$l['add_vote'] = "Дать оценку";
$l['update_vote'] = "Обновить оценку";
$l['delete_vote'] = "Удалить оценку";
$l['power_positive'] = "Хорошо ({1})";
$l['power_neutral'] = "Нейтрально";
$l['power_negative'] = "Плохо ({1})";
$l['show_all'] = "Показать: все голоса";
$l['show_positive'] = "Показать: хорошие оценки";
$l['show_neutral'] = "Показать: нейтральные оценки";
$l['show_negative'] = "Показать: плохие оценки";
$l['sort_updated'] = "Сортировать по: последнему обновлению";
$l['sort_username'] = "Сортировать по: имени пользователя";
$l['last_updated'] = "Последнее обновление {1}, {2}";
$l['postrep_post'] = "Сообщение #";
$l['postrep_given'] = "Оценка для {1}<br />";
$l['no_reputation_votes'] = "Для указанного критерия пользователь не имеет оценок репутации.";
$l['delete_reputation_confirm'] = "Вы уверены, что хотите удалить эту оценку репутации?";
$l['delete_reputation_log'] = "Оценка репутации удалена {1} (UID: {2})";
$l['reputations_disabled_group'] = "Ситема оценки репутации для данной группы отключена.";
$l['rate_user'] = "Оценить пользователя";
?>
