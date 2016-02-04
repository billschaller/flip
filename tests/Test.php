<?php

class Test extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException ┻━┻
     * @expectedExceptionMessage Please respect tables! ┬─┬ノ(ಠ_ಠノ)
     */
    public function testCorrectExceptionIsThrown()
    {
        （╯°□°）╯︵┻━┻();
    }

    /**
     * @expectedException ┻━┻
     * @expectedExceptionMessage Please respect tables! ┬─┬ノ(ಠ_ಠノ)
     */
    public function testObjectOrientatedExceptionIsThrown()
    {
        ┻━┻::ノ（°□°ノ）();
    }
}
