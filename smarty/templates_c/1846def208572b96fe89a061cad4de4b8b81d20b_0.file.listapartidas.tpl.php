<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-27 11:07:20
  from '/home/etxea/NetBeansProjects/DWES/CrimeBook/smarty/templates/listapartidas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7dd0587ef036_39775186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1846def208572b96fe89a061cad4de4b8b81d20b' => 
    array (
      0 => '/home/etxea/NetBeansProjects/DWES/CrimeBook/smarty/templates/listapartidas.tpl',
      1 => 1585292218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7dd0587ef036_39775186 (Smarty_Internal_Template $_smarty_tpl) {
?><div align="center"><h2><p>Juego seleccionado: <?php echo $_smarty_tpl->tpl_vars['mijuego']->value;?>
</h2></p></div>
<form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
    <table align="center">
        <tr>
            <th>Seleccionar partida</th>
            <th>Nombre de la partida</th>
            <th>N.º de equipos</th>
            <th>Fecha de creación</th>
            <th>Usuario que lo creó</th>
            <th>Finalizada</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partidas']->value, 'partida');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['partida']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['partida']->value->getidJuego() == $_smarty_tpl->tpl_vars['cod']->value) {?>
                <tr>    
                    <td>
                        <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['partida']->value->getid();?>
" name="idPartida">
                    </td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['partida']->value->getnombre();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['equipos']->value->getnum_equipos();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['partida']->value->getfechaCreacion();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['partida']->value->getusername();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['partida']->value->getfinalizada();?>
</td>
                </tr>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <div align="center">
        <br><br>
        <input type="submit" value="Editar partida" name="editarpartida">
        <input type="submit" value="Estadísticas" name="estadisticas">
        <input type="submit" value="Eliminar partida finalizada" name="eliminarpartida">
    </div>
    <div><span class='error'><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></span></div>
</form>


<?php }
}
