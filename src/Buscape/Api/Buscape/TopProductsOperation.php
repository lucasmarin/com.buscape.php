<?php

namespace Buscape\Api\Buscape;

/**
 * @brief	Classes relacionadas com a API BuscaPé
 * @package	Buscape\Api\Buscape
 */

use Buscape\Api\ApiOperation;

/**
 * @brief	Produtos populares
 * @details	Essa classe representa a operação topProducts da
 * API do BuscaPé.
 */
class TopProductsOperation extends APIOperation {
	/**
	 * @return	string
	 * @see		APIOperation::getOperationPath()
	 */
	protected function getOperationPath() {
		return '/service/topProducts/';
	}
}
