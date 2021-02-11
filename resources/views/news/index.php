<?php
foreach($listNews as $key => $news) {
	echo $news . "&nbsp;<a href='".route('news.show', ['id' => $key])."'>Перейти</a><br>";
}