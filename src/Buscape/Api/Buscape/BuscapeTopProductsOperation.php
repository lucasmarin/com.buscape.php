<?php
/**
 * @brief	Classes relacionadas com a API BuscaPé
 * @package	com.buscape.php.api.buscape
 */

require_once 'src/api/APIOperation.php';

/**
 * @brief	Produtos populares
 * @details	Essa classe representa a operação topProducts da
 * API do BuscaPé.
 */
class BuscapeTopProductsOperation extends APIOperation {
	/**
	 * @return	string
	 * @see		APIOperation::getOperationPath()
	 */
	protected function getOperationPath() {
		return '/service/topProducts/';
	}
}
