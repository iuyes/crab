<?php
/**
 * factory action
 * 
 * factory class test entrance
 *
 * @author allenhaozi@gmail.com
 */
class Default_Factory extends Controller
{
	public function indexAction()
	{
		$objCaocao = new Factory_Caocao();
		$objSword = $objCaocao->createSword();
		dump( 'caocao use ' . $objSword->getName() . ' kill dongzhuo' );
		
		$objCaocao2 = new Factory_Caocao2();
		$objSword2 = $objCaocao2->createSword();
		dump( 'caocao use ' . $objSword2->getName() . ' kill dongzhuo' );
		
		exit;
	}
}
