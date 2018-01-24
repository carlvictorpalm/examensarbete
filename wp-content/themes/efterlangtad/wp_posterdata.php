<?php
global $wpdb;

$sql = "INSERT INTO `wp_posterdata`(`birthname`, `birthlength`, `birthday`, `birthhours`, `birthminutes`, `birthweight`)
        VALUES(:birthname, :birthlength, :birthday, :birthhours, :birthminutes, :birthweight)";

$wpdb->insert('wp_posterdata', array(
    'birthname' => $_POST['birthname'],
    'birthlength' => $_POST['birthlength'],
    'birthday' => $_POST['birthday'],
    'birthhours' => $_POST['birthhours'],
    'birthminutes' => $_POST['birthminutes'],
    'birthweight' => $_POST['birthweight']));

$wpdb->query($sql);


global $wpdb;

$sql = "INSERT INTO `wp_orders`(`firstname`, `lastname`, `company`, `email`, `street`, `zip_code`, `city`, `delivery_firstname`, `delivery_lastname`, `delivery_street`, `delivery_zip_code`, `delivery_city`, `product_id`, `card`, `invoice`)
        VALUES(:firstname, :lastname, :company, :email, :street, :zip_code, :city, :delivery_firstname, :delivery_lastname, :delivery_street, :delivery_zip_code, :delivery_city, :product_id, :card, :invoice)";

$wpdb->insert('wp_orders', array(
    'firstname' => $_POST['fornamn'],
    'lastname' => $_POST['efternamn'],
    'company' => $_POST['foretag'],
    'email' => $_POST['email'],
    'street' => $_POST['gata'],
    'zip_code' => $_POST['postnummer'],
    'city' => $_POST['stad'],
    'delivery_firstname' => $_POST['leveransfornamn'],
    'delivery_lastname' => $_POST['leveransefternamn'],
    'delivery_street' => $_POST['leveransgata'],
    'delivery_zip_code' => $_POST['leveranspostnummer'],
    'delivery_city' => $_POST['leveransstad'],
    'product_id' => $_POST['product_id'],
    'card' => $_POST['card'],
    'invoice' => $_POST['invoice']));

$wpdb->query($sql);