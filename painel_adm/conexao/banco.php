<?php

$con = mysqli_connect("painel_adm_gx.mysql.dbaas.com.br", "painel_adm_gx", "painel_adm2022", "painel_adm_gx");

if (mysqli_connect_errno()) {
  echo "Falha ao se conectar ao MySQL: " . mysqli_connect_error();
} else {
  mysqli_select_db($con, "painel_adm_gx");
}
