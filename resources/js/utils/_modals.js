import Swal from "sweetalert2"
export const VueSweetAlert2 = function(component, propsData)
{
    Swal.fire({
        html: '<div id="VueSweetAlert2"></div>',
        showConfirmButton: false,
        onBeforeOpen: () => {
            let ComponentClass = Vue.extend(Vue.component(component));
            let instance = new ComponentClass({
                propsData: propsData,
            });
            instance.$mount();
            document.getElementById('VueSweetAlert2').appendChild(instance.$el);
        }
    });
}
