<?php

//namespace Drupal\premierModule\Controller;

class PremierModuleController
{
	public function hello()
	{
		return array(
			'#title' => 'Salut',
			'#markup' => 'Voici du contenu'
		);
	}
}
