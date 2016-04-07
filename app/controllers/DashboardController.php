<?php
/**
* Dashboard Controller
* by Darana Sukma Vidya
*/
class DashboardController extends BaseController
{
	function __construct()
	{
		# code...
	}

	function index()
	{
		return View::make('admin.dashboard.main');
	}

	function master_member()
	{
		return View::make('admin.master_member.list');
	}

	function master_member_form()
	{
		return View::make('admin.master_member.form');
	}

	function master_member_level()
	{
		return View::make('admin.master_member_level.list');
	}

	function master_member_level_form()
	{
		return View::make('admin.master_member_level.form');
	}

	function member_registration()
	{
		return View::make('admin.member_registration.list');
	}

	function member_registration_form()
	{
		return View::make('admin.member_registration.form');
	}

	function image_gallery()
	{
		return View::make('admin.image_gallery.list');
	}

	function image_gallery_form()
	{
		return View::make('admin.image_gallery.form');
	}

	function video_gallery()
	{
		return View::make('admin.video_gallery.list');
	}

	function video_gallery_form()
	{
		return View::make('admin.video_gallery.form');
	}

	function news_events()
	{
		return View::make('admin.news_events.list');
	}

	function news_events_form()
	{
		return View::make('admin.news_events.form');
	}

	function configuration()
	{
		return View::make('admin.configuration.list');
	}

	function configuration_form()
	{
		return View::make('admin.configuration.form');
	}

	function group()
	{
		return View::make('admin.group.list');
	}

	function group_form()
	{
		return View::make('admin.group.form');
	}

	function users()
	{
		return View::make('admin.user.list');
	}

	function users_form()
	{
		return View::make('admin.user.form');
	}

// END
}