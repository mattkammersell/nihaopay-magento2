<?php

namespace Nihaopay\Payments\Model\Source;

use Magento\Framework\Option\ArrayInterface;


class NihaopayMode implements ArrayInterface {

	public function toOptionArray() {
		return [
			['value' => 'test_mode', 'label' =>__('Test Mode')],
			['value' => 'live_mode', 'label' => __('Live Mode')]
			];
	}

}
