<?
	namespace app;

	/* @var $context Context_Book */
	/* @var $control Controller_Book */
	/* @var $theme   ThemeView */

	$my_form = Form::instance();
	$my_form->action($control->action('publish'));
	$my_form->errors($errors['Book.publish']);
?>