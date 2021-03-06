<?php

namespace Buscape\Http;

/**
 * @brief	Protocolo HTTP
 * @details	Classes e interfaces relacionadas com o protocolo HTTP
 * @package Buscape\Http
 */

/**
 * @brief	Constantes para identificar o método de requisição HTTP
 */
interface HTTPRequestMethod {
	const DELETE = 'DELETE';
	const GET = 'GET';
	const HEAD = 'HEAD';
	const OPTIONS = 'OPTIONS';
	const POST = 'POST';
	const PUT = 'PUT';
	const TRACE = 'TRACE';
}