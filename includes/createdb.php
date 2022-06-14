<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_query("create database bikeshop") or die(mysql_error());
mysql_select_db("bikeshop") or die(mysql_error());
mysql_query("create table customer(firstname text,lastname text,username text,password text,email text,contactno text)") or die(mysql_error());
mysql_query("create table admin(firstname text,lastname text,username text,password text,email text,contactno text)") or die(mysql_error());
mysql_query("create table feedback(uname text,email text,feed text)") or die(mysql_error());
mysql_query("create table bikes(ray text,r15 text,crux text,ybr text,fz text,fazer text,vmax text,sz text)") or die(mysql_query());
?>