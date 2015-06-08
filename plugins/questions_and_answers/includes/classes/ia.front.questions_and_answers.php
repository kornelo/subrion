<?php

class iaQuestions_and_answers extends abstractPlugin
{
	const ALIAS_SUFFIX = '.html';

	public function titleAlias($title)
	{
		$result = iaSanitize::tags($title);

		iaUtil::loadUTF8Functions('ascii', 'utf8_to_ascii');
		utf8_is_ascii($result) || $result = utf8_to_ascii($result);

		$result = rtrim($result, self::ALIAS_SUFFIX);
		$result = iaSanitize::alias($result);
		$result = substr($result, 0, 150); // limitation according to the DB scheme
		$result .= self::ALIAS_SUFFIX;

		return $result;
	}

	public function incrementViewsCounter($itemId)
	{
		$columnName = 'view_num';
		$result = $this->iaDb->update(null, iaDb::convertIds($itemId), array($columnName => '`' . $columnName . '` + 1'), 'questions_and_answers');

		return (bool)$result;
	}
}	