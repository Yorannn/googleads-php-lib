<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PlacementTargeting
{

    /**
     * @var int[] $targetedPlacementIds
     */
    protected $targetedPlacementIds = null;

    /**
     * @param int[] $targetedPlacementIds
     */
    public function __construct(array $targetedPlacementIds = null)
    {
      $this->targetedPlacementIds = $targetedPlacementIds;
    }

    /**
     * @return int[]
     */
    public function getTargetedPlacementIds()
    {
      return $this->targetedPlacementIds;
    }

    /**
     * @param int[] $targetedPlacementIds
     * @return \Google\AdsApi\Dfp\v201702\PlacementTargeting
     */
    public function setTargetedPlacementIds(array $targetedPlacementIds)
    {
      $this->targetedPlacementIds = $targetedPlacementIds;
      return $this;
    }

}
