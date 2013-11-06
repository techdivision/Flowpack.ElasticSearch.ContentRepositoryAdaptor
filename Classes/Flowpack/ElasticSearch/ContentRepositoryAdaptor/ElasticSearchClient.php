<?php
namespace Flowpack\ElasticSearch\ContentRepositoryAdaptor;


/*                                                                                                  *
 * This script belongs to the TYPO3 Flow package "Flowpack.ElasticSearch.ContentRepositoryAdaptor". *
 *                                                                                                  *
 * It is free software; you can redistribute it and/or modify it under                              *
 * the terms of the GNU Lesser General Public License, either version 3                             *
 *  of the License, or (at your option) any later version.                                          *
 *                                                                                                  *
 * The TYPO3 project - inspiring people to share!                                                   *
 *                                                                                                  */

use TYPO3\Flow\Annotations as Flow;

/**
 * The elasticsearch client to be used by the content repository adapter. Singleton, can be injected.
 *
 * @Flow\Scope("singleton")
 */
class ElasticSearchClient extends \Flowpack\ElasticSearch\Domain\Model\Client {

}