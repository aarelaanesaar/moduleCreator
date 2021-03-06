				${{entity}}->save();
				Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('{{module}}')->__('The {{entityLabel}} has been saved.'));
				$refreshTree = 'true';
			}
			catch (Exception $e){
				$this->_getSession()->addError($e->getMessage())->set{{Entity}}Data($data);
				Mage::logException($e);
				$refreshTree = 'false';
			}
		}
		$url = $this->getUrl('*/*/edit', array('_current' => true, 'id' => ${{entity}}->getId()));
		$this->getResponse()->setBody(
			'<script type="text/javascript">parent.updateContent("' . $url . '", {}, '.$refreshTree.');</script>'
		);
	}
