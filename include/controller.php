<?php
$page = isset($_GET['pg']) ? $_GET['pg'] : 'home';
if($page == 'info')
{
	include 'include/controller.info.php';
}
elseif($page == 'kontak')
{
	include 'include/controller.kontak.php';
}
elseif($page == 'produk')
{
	include 'include/controller.produk.php';
}
elseif($page == 'cart')
{
	include 'include/controller.cart.php';
}
elseif($page == 'checkout')
{
	include 'include/controller.checkout.php';
}
elseif($page == 'member')
{
	include 'include/controller.member.php';
}
elseif ($page == 'home')
{
	include 'include/controller.home.php';
}
else
{
	include 'include/404.php';
}