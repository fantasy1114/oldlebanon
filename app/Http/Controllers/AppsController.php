<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
  // invoice list App
  public function invoice_list()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/content/apps/invoice/invoice-list', ['pageConfigs' => $pageConfigs]);
  }

  // invoice preview App
  public function invoice_preview()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/content/apps/invoice/invoice-preview', ['pageConfigs' => $pageConfigs]);
  }

  // invoice edit App
  public function invoice_edit()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/content/apps/invoice/invoice-edit', ['pageConfigs' => $pageConfigs]);
  }

  // invoice edit App
  public function invoice_add()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/content/apps/invoice/invoice-add', ['pageConfigs' => $pageConfigs]);
  }

  // invoice print App
  public function invoice_print()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/content/apps/invoice/invoice-print', ['pageConfigs' => $pageConfigs]);
  }

  // User List Page
  public function user_list()
  {
    $pageConfigs = ['pageHeader' => false];
    return view('/content/apps/user/app-user-list', ['pageConfigs' => $pageConfigs]);
  }

  // User View Page
  public function user_view()
  {
    $pageConfigs = ['pageHeader' => false];
    return view('/content/apps/user/app-user-view', ['pageConfigs' => $pageConfigs]);
  }

  // User Edit Page
  public function user_edit()
  {
    $pageConfigs = ['pageHeader' => false];
    return view('/content/apps/user/app-user-edit', ['pageConfigs' => $pageConfigs]);
  }

  // Chat App
  public function chatApp()
  {
    $pageConfigs = [
      'pageHeader' => false,
      'contentLayout' => "content-left-sidebar",
      'pageClass' => 'chat-application',
    ];

    return view('/content/apps/chat/app-chat', [
      'pageConfigs' => $pageConfigs
    ]);
  }

  // Calender App
  public function calendarApp()
  {
    $pageConfigs = [
      'pageHeader' => false
    ];

    return view('/content/apps/calendar/app-calendar', [
      'pageConfigs' => $pageConfigs
    ]);
  }

  // Email App
  public function emailApp()
  {
    $pageConfigs = [
      'pageHeader' => false,
      'contentLayout' => "content-left-sidebar",
      'pageClass' => 'email-application',
    ];

    return view('/content/apps/email/app-email', ['pageConfigs' => $pageConfigs]);
  }
  // ToDo App
  public function todoApp()
  {
    $pageConfigs = [
      'pageHeader' => false,
      'contentLayout' => "content-left-sidebar",
      'pageClass' => 'todo-application',
    ];

    return view('/content/apps/todo/app-todo', [
      'pageConfigs' => $pageConfigs
    ]);
  }
  // File manager App
  public function file_manager()
  {
    $pageConfigs = [
      'pageHeader' => false,
      'contentLayout' => "content-left-sidebar",
      'pageClass' => 'file-manager-application',
    ];

    return view('/content/apps/fileManager/app-file-manager', ['pageConfigs' => $pageConfigs]);
  }

  // Kanban App
  public function kanbanApp()
  {
    $pageConfigs = [
      'pageHeader' => false,
      'pageClass' => 'kanban-application',
    ];

    return view('/content/apps/kanban/app-kanban', ['pageConfigs' => $pageConfigs]);
  }

  // Ecommerce Shop
  public function ecommerce_shop()
  {
    $pageConfigs = [
      'contentLayout' => "content-detached-left-sidebar",
      'pageClass' => 'ecommerce-application',
    ];

    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Shop"]
    ];

    return view('/content/apps/ecommerce/app-ecommerce-shop', [
      'pageConfigs' => $pageConfigs,
      'breadcrumbs' => $breadcrumbs
    ]);
  }

  // Ecommerce Details
  public function ecommerce_details()
  {
    $pageConfigs = [
      'pageClass' => 'ecommerce-application',
    ];

    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['link' => "/app/ecommerce/shop", 'name' => "Shop"], ['name' => "Details"]
    ];

    return view('/content/apps/ecommerce/app-ecommerce-details', [
      'pageConfigs' => $pageConfigs,
      'breadcrumbs' => $breadcrumbs
    ]);
  }

  // Ecommerce Wish List
  public function ecommerce_wishlist()
  {
    $pageConfigs = [
      'pageClass' => 'ecommerce-application',
    ];

    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Wish List"]
    ];

    return view('/content/apps/ecommerce/app-ecommerce-wishlist', [
      'pageConfigs' => $pageConfigs,
      'breadcrumbs' => $breadcrumbs
    ]);
  }

  // Ecommerce Checkout
  public function ecommerce_checkout()
  {
    $pageConfigs = [
      'pageClass' => 'ecommerce-application',
    ];

    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Checkout"]
    ];

    return view('/content/apps/ecommerce/app-ecommerce-checkout', [
      'pageConfigs' => $pageConfigs,
      'breadcrumbs' => $breadcrumbs
    ]);
  }
}
