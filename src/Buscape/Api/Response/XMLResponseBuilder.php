<?php

namespace Buscape\Api\Response;

/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package Buscape\Api\Response
 */

use Buscape\Api\Response\ResponseBuilder;

/**
 * @brief	Constroi o objeto de resultado de uma resposta no formato XML.
 */
class XMLResponseBuilder extends ResponseBuilder {
	/**
	 * @param	string $content
	 * @return	ResponseBuilder
	 * @see		ResponseBuilder::parse()
	 */
	public function parse( $content ) {

		return $this;
	}
}