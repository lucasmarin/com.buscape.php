<?php

namespace Buscape\Api\Buscape;

/**
 * @brief	Classes relacionadas com a API BuscaPé
 * @package	Buscape\Api\Buscape
 */

use Buscape\Api\APIInterface;
use Buscape\Api\Buscape\FindCategoryListOperation;
use Buscape\Api\Buscape\FindOfferListOperation;
use Buscape\Api\Buscape\FindProductListOperation;
use Buscape\Api\Buscape\TopProductsOperation;
use Buscape\Api\Buscape\ViewProductDetailsOperation;
use Buscape\Api\Buscape\ViewSellerDetailsOperation;
use Buscape\Api\Buscape\ViewUserRatingsOperation;

/**
 * @brief	API BuscaPé
 * @details	Essa classe representa a API Buscapé, com ela pode-se
 * utilizar todas as operações para localizar ofertas de produtos,
 * categorias informações sobre vendedores e opinião de clientes.
 */
class API extends APIInterface {
	/**
	 * Cria um objeto que representa uma operação findCategoryList.
	 * @return	FindCategoryListOperation
	 */
	public function findCategoryList() {
		return new FindCategoryListOperation( $this );
	}

	/**
	 * Cria um objeto que representa uma operação findOfferList.
	 * @return	FindOfferListOperation
	 */
	public function findOfferList() {
		return new FindOfferListOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação findProductList.
	 * @return	FindProductListOperation
	 */
	public function findProductList() {
		return new FindProductListOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação topProducts.
	 * @return	TopProductsOperation
	 */
	public function topProducts() {
		return new TopProductsOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação viewProductDetails.
	 * @return	ViewProductDetailsOperation
	 */
	public function viewProductDetails() {
		return new ViewProductDetailsOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação viewSellerDetails.
	 * @return	ViewSellerDetailsOperation
	 */
	public function viewSellerDetails() {
		return new ViewSellerDetailsOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação viewUserRatings.
	 * @return	ViewUserRatingsOperation
	 */
	public function viewUserRatings() {
		return new ViewUserRatingsOperation( $this );
	}
}