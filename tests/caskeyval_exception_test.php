<?php
// This file is part of Stack - http://stack.maths.ed.ac.uk/
//
// Stack is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Stack is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Stack.  If not, see <http://www.gnu.org/licenses/>.

require_once(__DIR__ . '/../locallib.php');
require_once(__DIR__ . '/fixtures/test_base.php');
require_once(__DIR__ . '/../stack/cas/cassession.class.php');
require_once(__DIR__ . '/../stack/cas/keyval.class.php');


/**
 * Unit tests for {@link stack_cas_keyval} involving exceptions.
 * @group qtype_stack
 */
class stack_cas_keyval_exception_test extends basic_testcase {
    public function test_exception_1() {
        $this->setExpectedException('stack_exception');
        $at1 = new stack_cas_keyval(array(), false, false, 0);
    }

    public function test_exception_2() {
        $this->setExpectedException('stack_exception');
        $at1 = new stack_cas_keyval(1, false, false, 0);
    }

    public function test_exception_3() {
        $this->setExpectedException('stack_exception');
        $at1 = new stack_cas_keyval('x=1', false, false, 0);
    }

    public function test_exception_4() {
        $this->setExpectedException('stack_exception');
        $at1 = new stack_cas_keyval('x=1', null, false, 0);
    }

    public function test_exception_5() {
        $this->setExpectedException('stack_exception');
        $at1 = new stack_cas_keyval('x=1', 'z', false, 0);
    }

    public function test_exception_6() {
        $this->setExpectedException('stack_exception');
        $at1 = new stack_cas_keyval('x=1', 't', 1, 0);
    }

    public function test_exception_7() {
        $this->setExpectedException('stack_exception');
        $at1 = new stack_cas_keyval('x=1', 't', false, true);
    }
}
