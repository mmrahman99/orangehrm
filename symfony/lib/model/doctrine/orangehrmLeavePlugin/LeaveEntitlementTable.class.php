<?php

/**
 * LeaveEntitlementTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LeaveEntitlementTable extends PluginLeaveEntitlementTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object LeaveEntitlementTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LeaveEntitlement');
    }
}