<?php

namespace Buscape\Api\Response;

/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package Buscape\Api\Response
 */

/**
 * @brief	Representação de uma localização no mapa.
 */
class Map {
	/**
	 * @var	float
	 */
	private $latitude;

	/**
	 * @var	float
	 */
	private $longitude;

	/**
	 * Recupera o valor de $latitude
	 * @return	float
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * Recupera o valor de $longitude
	 * @return	float
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * @param float $latitude
	 */
	public function setLatitude( $latitude ) {
		$this->latitude = $latitude;
	}

	/**
	 * @param float $longitude
	 */
	public function setLongitude( $longitude ) {
		$this->longitude = $longitude;
	}
}