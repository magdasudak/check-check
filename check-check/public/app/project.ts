export class Project {
	name: string;
	author: any;
	image: string;
	description: any;
	status: string;
	finance: string;

	constructor(title: string, author: any, image?: string, description: any, status: string, finance: string)
	this.name = name;
	this.auhtor = author;
	this.image = image || 0;
	this.description = description;
	this.status = status;
	this.finance = finance;

}