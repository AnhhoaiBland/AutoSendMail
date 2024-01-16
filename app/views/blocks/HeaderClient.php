<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="./public/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/magnific-popup.css">
    <link rel="stylesheet" href="./public/css/jquery-ui.css">
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="./public/css/aos.css">

    <link rel="stylesheet" href="./public/css/style.css">

  </head>
  <body>

  <div class="site-wrap"><div class="site-mobile-menu"><div class="site-mobile-menu-header"><div class="site-mobile-menu-logo"><a href="index.html" class="js-logo-clone">Shoppers</a></div><div class="site-mobile-menu-close "><span class="ion-ios-close js-menu-toggle"></span></div></div><div class="site-mobile-menu-body"><ul class="site-nav-wrap">
                  <li class="has-children active"><span class="arrow-collapse collapsed" data-toggle="collapse" data-target="#collapseItem0"></span>
                      <a href="index.html">Home</a>
                      <ul class="collapse" id="collapseItem0">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                          <li class="has-children"><span class="arrow-collapse collapsed" data-toggle="collapse" data-target="#collapseItem1"></span>
                              <a href="#">Sub Menu</a>
                              <ul class="collapse" id="collapseItem1">
                                  <li><a href="#">Menu One</a></li>
                                  <li><a href="#">Menu Two</a></li>
                                  <li><a href="#">Menu Three</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <li class="has-children"><span class="arrow-collapse collapsed" data-toggle="collapse" data-target="#collapseItem2"></span>
                      <a href="about.html">About</a>
                      <ul class="collapse" id="collapseItem2">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                      </ul>
                  </li>
                  <li><a href="shop.html">Shop</a></li>
                  <li><a href="#">Catalogue</a></li>
                  <li><a href="#">New Arrivals</a></li>
                  <li><a href="contact.html">Contact</a></li>
              </ul></div></div>
      <header class="site-navbar" role="banner">
          <div class="site-navbar-top">
              <div class="container">
                  <div class="row align-items-center">

                      <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                          <form action="" class="site-block-top-search">
                              <span class="icon icon-search2"></span>
                              <input type="text" class="form-control border-0" placeholder="Search">
                          </form>
                      </div>

                      <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                          <div class="site-logo">
                              <a href="index.html" class="js-logo-clone">Shoppers</a>
                          </div>
                      </div>

                      <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                          <div class="site-top-icons">

                              <ul>
                                  <li>
                                      <a href="<?php if (!empty($_SESSION['usersname'])) {
                                          echo 'updateprofile';

                                      } else {
                                          echo 'loginclient';
                                      } ?>">
                                          <span class="icon icon-person"></span>
                                      </a>
                                  </li>
                                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                                  <li>
                                      <a href="cart.html" class="site-cart">
                                          <span class="icon icon-shopping_cart"></span>
                                          <span class="count">2</span>
                                      </a>
                                  </li>
                                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                              </ul>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <nav class="site-navigation text-right text-md-center" role="navigation">
              <div class="container">
                  <ul class="site-menu js-clone-nav d-none d-md-block">
                      <li class="has-children active">
                          <a href="dashboard">Home</a>
                          <ul class="dropdown">
                              <li><a href="#">Menu One</a></li>
                              <li><a href="#">Menu Two</a></li>
                              <li><a href="#">Menu Three</a></li>
                              <li class="has-children">
                                  <a href="#">Sub Menu</a>
                                  <ul class="dropdown">
                                      <li><a href="#">Menu One</a></li>
                                      <li><a href="#">Menu Two</a></li>
                                      <li><a href="#">Menu Three</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="has-children">
                          <a href="about">About</a>
                          <ul class="dropdown">
                              <li><a href="#">Menu One</a></li>
                              <li><a href="#">Menu Two</a></li>
                              <li><a href="#">Menu Three</a></li>
                          </ul>
                      </li>
                      <li><a href="shop">Shop</a></li>
                      <li><a href="contact">Contact</a></li>
                  </ul>
              </div>
          </nav>
      </header>










  </div>