import {ApiData} from "../libs/ApiData";
const jQuery = require('jquery')

export class PageAction {

    private listContainer:JQuery

    constructor() {
        this.listContainer = jQuery('#js_person_list')
    }

    private bindViewAction() {
        this.listContainer.on('click', '.js_person_item', (e) => {
            let user = jQuery(e.target).data('user');
            let message = `
            Name: ${user.name},
            User name: ${user.username}
            Email: ${user.email}
            Phone: ${user.phone}
            Website: ${user.website}
            `
            alert(message)
        })
    }

    private initList() {
        jQuery.each(ApiData.getUsers(),  (index:number, user:any) => {
            let newElement = jQuery('<div class="person_list_item js_person_item">')
            newElement.html(user.name)
            newElement.attr('data-user', JSON.stringify(user))
            this.listContainer.append(newElement)
        })
    }

    private readEvents() {
        this.initList()
        this.bindViewAction()
    }

    public run() {
        window.addEventListener('DOMContentLoaded', () => {
            this.readEvents()
        })
    }
}