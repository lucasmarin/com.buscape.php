<?php

namespace Buscape\Api\Buscape;

/**
 * @brief	Classes relacionadas com a API BuscaPé
 * @package	Buscape\Api\Buscape
 */

use Buscape\Api\ApiOperation;

/**
 * @brief	Detalhes de vendedores
 * @details	Essa classe representa a operação viewSellerDetails
 * da API do BuscaPé.
 */
class ViewSellerDetailsOperation extends APIOperation {
	/**
	 * @var	integer
	 */
	private $sellerId;

	/**
	 * @brief	Recupera o ID do vendedor.
	 * @return	integer
	 */
	public function getSellerId() {
		return $this->sellerId;
	}

	/**
	 * @return	string
	 * @see		APIOperation::getOperationPath()
	 */
	protected function getOperationPath() {
		return '/service/viewSellerDetails/';
	}

	/**
	 * @brief	Define o ID do vendedor.
	 * @param	integer $sellerId
	 * @throws	InvalidArgumentException Se o ID do vendedor não for
	 * um inteiro
	 */
	public function setSellerId( $sellerId ) {
		if ( is_int( $sellerId ) ) {
			$this->sellerId = $sellerId;
			$this->apiInterface->getHTTPConnection()->setParam( 'sellerId' , $sellerId );
		} else {
			throw new InvalidArgumentException( 'O ID do vendedor precisa ser um inteiro' );
		}
	}
}