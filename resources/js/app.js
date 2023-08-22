import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { Datepicker, Input, Collapse, Dropdown, Ripple, initTE } from "tw-elements";
initTE({ Datepicker, Input, Collapse, Dropdown, Ripple });
