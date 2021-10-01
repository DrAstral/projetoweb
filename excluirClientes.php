<? php
	require_once ( "controlador / ControllerCadastro.php" );

	$ controlador = novo  ControllerCadastro ();
	$ resultado = $ controlador -> excluir ( $ _GET [ 'id' ]);

?>