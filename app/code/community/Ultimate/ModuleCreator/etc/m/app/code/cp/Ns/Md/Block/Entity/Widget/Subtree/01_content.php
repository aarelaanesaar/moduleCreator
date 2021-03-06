<?php 
{{License}}
/**
 * {{EntityLabel}} subtree block
 *
 * @category	{{Namespace}}
 * @package		{{Namespace}}_{{Module}}
 * {{qwertyuiop}}
 */
class {{Namespace}}_{{Module}}_Block_{{Entity}}_Widget_Subtree extends {{Namespace}}_{{Module}}_Block_{{Entity}}_List implements Mage_Widget_Block_Interface{
	protected $_template = '{{namespace}}_{{module}}/{{entity}}/widget/subtree.phtml';
	/**
	 * prepare the layout
	 * @access protected
	 * @return {{Namespace}}_{{Module}}_Block_{{Entity}}_Widget_Subtree
	 * {{qwertyuiop}}
	 */
	protected function _prepareLayout(){
		$this->get{{Entities}}()->addFieldToFilter('entity_id', $this->get{{Entity}}Id());
		return $this;
	}
	/**
	 * get the display mode
	 * @access protected
	 * @return int
	 * {{qwertyuiop}}
	 */
	protected function _getDisplayMode(){
		return 1;
	}
	/**
	 * get the element id
	 * @access protected
	 * @return int
	 * {{qwertyuiop}}
	 */
	public function getUniqueId(){
		if (!$this->getData('uniq_id')){
			$this->setData('uniq_id', uniqid('subtree'));
		}
		return $this->getData('uniq_id');
	}
}