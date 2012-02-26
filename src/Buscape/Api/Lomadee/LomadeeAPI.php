<?php

namespace Buscape\Api\Lomadee;

/**
 * @brief	Classes relacionadas com a API Lomadee
 * @package	Buscape\Api\Lomadee
 */

use Buscape\Api\APIInterface;
use Buscape\Api\Lomadee\CreateSourceOperation;
use Buscape\Api\Lomadee\FindAdvertiserListOperation;
use Buscape\Api\Lomadee\FindCategoryListOperation;
use Buscape\Api\Lomadee\FindOfferListOperation;
use Buscape\Api\Lomadee\FindProductListOperation;

/**
 * @brief	Essa classe representa a API Lomadee.
 */
class LomadeeAPI extends APIInterface {
	/**
	 * @brief	Criar sourceId (código) para o Publisher
	 * @details	Cria um objeto que representa a operação createSource
	 * para criação de um sourceIf (código) para o Publisher.
	 * @return	CreateSourceOperation
	 */
	public function createSource() {
		return new CreateSourceOperation( $this );
	}

	/**
	 * @brief	Lista de anunciantes
	 * @details	Cria um objeto que representa a operação findAdvertiserList.
	 * @return	FindAdvertiserListOperation
	 */
	public function findAdvertiserList() {
		return new FindAdvertiserListOperation( $this );
	}

	/**
	 * @brief	Lista de categorias
	 * @details	Cria um objeto que representa uma operação findCategoryList.
	 * @return	FindCategoryListOperation
	 */
	public function findCategoryList() {
		return new FindCategoryListOperation( $this );
	}

	/**
	 * @brief	Lista de ofertas
	 * @details	Cria um objeto que representa uma operação findOfferList.
	 * @return	FindOfferListOperation
	 */
	public function findOfferList() {
		return new FindOfferListOperation( $this );
	}

	/**
	 * @brief	Lista de produtos
	 * @details	Cria um objeto que representa a operação findProductList.
	 * @return	FindProductListOperation
	 */
	public function findProductList() {
		return new FindProductListOperation( $this );
	}
}