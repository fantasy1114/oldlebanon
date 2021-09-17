<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

  // Account Settings
  public function account_settings()
  {
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Account Settings"]];
    return view('/content/pages/page-account-settings', ['breadcrumbs' => $breadcrumbs]);
  }

  // Profile
  public function profile()
  {
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Profile"]];

    return view('/content/pages/page-profile', ['breadcrumbs' => $breadcrumbs]);
  }

  // FAQ
  public function faq()
  {
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "FAQ"]];
    return view('/content/pages/page-faq', ['breadcrumbs' => $breadcrumbs]);
  }

  // Knowledge Base
  public function knowledge_base()
  {
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Knowledge Base"]];
    return view('/content/pages/page-knowledge-base', ['breadcrumbs' => $breadcrumbs]);
  }

  // Knowledge Base Category
  public function kb_category()
  {
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "/page/knowledge-base", 'name' => "Knowledge Base"], ['name' => "Category"]];
    return view('/content/pages/page-kb-category', ['breadcrumbs' => $breadcrumbs]);
  }

  // Knowledge Base Question
  public function kb_question()
  {
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "/page/knowledge-base", 'name' => "Knowledge Base"], ['link' => "/page/kb-category", 'name' => "Category"], ['name' => "Question"]];
    return view('/content/pages/page-kb-question', ['breadcrumbs' => $breadcrumbs]);
  }

  // pricing
  public function pricing()
  {
    $pageConfigs = ['pageHeader' => false];
    return view('/content/pages/page-pricing', ['pageConfigs' => $pageConfigs]);
  }

  // blog list
  public function blog_list()
  {
    $pageConfigs = ['contentLayout' => 'content-detached-right-sidebar', 'bodyClass' => 'content-detached-right-sidebar'];

    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "javascript:void(0)", 'name' => "Blog"], ['name' => "List"]];

    return view('/content/pages/page-blog-list', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
  }

  // blog detail
  public function blog_detail()
  {
    $pageConfigs = ['contentLayout' => 'content-detached-right-sidebar', 'bodyClass' => 'content-detached-right-sidebar'];

    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "javascript:void(0)", 'name' => "Blog"], ['name' => "Detail"]];

    return view('/content/pages/page-blog-detail', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
  }

  // blog edit
  public function blog_edit()
  {

    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "javascript:void(0)", 'name' => "Blog"], ['name' => "Edit"]];

    return view('/content/pages/page-blog-edit', ['breadcrumbs' => $breadcrumbs]);
  }
}
