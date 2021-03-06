# Work in Progress

## Foundation 6 Shortcodes for WordPress

## Requirements
The plugin is tested with `Foundation 6` and `WordPress 4.4`

## Shortcode Reference

## Usage

### Grid
	[fn_row]
	    [fn_col small="6"]
	    	...
    	[/fn_col]
	    [fn_col medium="6"]
	    	...
	    [/fn_col]
	    [fn_col large="6"]
	    	...
	    [/fn_col]
	[/fn_row]

#### [fn_row] parameters

| Attribute				| Description																					| Required	| Values							| Default		|
| :-------------:	| :-------------------------------------------------: | :-------: | :-----------------:	| :-------: |
| id      				| An ID you wish to add 															|   no 	   	|  any id							|  null   	|
| class         	| Any classes you wish to add      										|   no     	|  any class/classes	|  null   	|
| style						| Any inline styles you wish to add      							|   no     	|  any css properties |  null   	|
| fluid						| Full width row (refer Foundation documentation)   	|   no     	|  yes   							|  null   	|

#### [fn_col] parameters
    [fn_col small="6"]
    	...
  	[/fn_col]
    [fn_col medium="6"]
    	...
    [/fn_col]
    [fn_col large="6"]
    	...
    [/fn_col]
| Attribute				| Description																					| Required	| Values							| Default		|
| :-------------:	| :-------------------------------------------------: | :-------: | :-----------------:	| :-------: |
| id      				| An ID you wish to add 															|   no 	   	|  any id							|  null   	|
| class         	| Any classes you wish to add      										|   no     	|  any class/classes	|  null   	|
| style						| Any inline styles you wish to add      							|   no     	|  any css properties |  null   	|
| small						| Column size on small screens      									|   no     	|  1-12  							|  null   	|
| medium					| Column size on medium screens    										|   no     	|  1-12  							|  null   	|
| large						| Column size on large screens      									|   no     	|  1-12  							|  null   	|
| small_centered	| Center the column on small screen or not						|   no     	|  yes, no 						|  null   	|
| medium_centered	| Center the column on medium screen or not						|   no     	|  yes, no 						|  null   	|
| large_centered	| Center the column on large screen or not						|   no     	|  yes, no 						|  null   	|


#### [fn_subheader] parameters
    [fn_subheader type="3"]
	    ...
    [/fn_subheader]

| Attribute				| Description																					| Required	| Values							| Default		|
| :-------------:	| :-------------------------------------------------: | :-------: | :-----------------:	| :-------: |
| id      				| An ID you wish to add 															|   no 	   	|  any id							|  null   	|
| class         	| Any classes you wish to add      										|   no     	|  any class/classes	|  null   	|
| style						| Any inline styles you wish to add      							|   no     	|  any css properties |  null   	|
| type						| Heading Type h1-h6     															|   no     	|   1-6    						|  1   			|


#### [fn_lead] parameters
    [fn_lead]
	    ...
    [/fn_lead]
| Attribute				| Description																					| Required	| Values							| Default		|
| :-------------:	| :-------------------------------------------------: | :-------: | :-----------------:	| :-------: |
| id      				| An ID you wish to add 															|   no 	   	|  any id							|  null   	|
| class         	| Any classes you wish to add      										|   no     	|  any class/classes	|  null   	|
| style						| Any inline styles you wish to add      							|   no     	|  any css properties |  null   	|


#### [fn_btn] parameters
    [fn_btn]
      ...
    [/fn_btn]
| Attribute       | Description                                         | Required  | Values              | Default   |
| :-------------: | :-------------------------------------------------: | :-------: | :-----------------: | :-------: |
| id              | An ID you wish to add                               |   no      |  any id             |  null     |
| class           | Any classes you wish to add                         |   no      |  any class/classes  |  null     |
| style           | Any inline styles you wish to add                   |   no      |  any css properties |  null     |
| link            | Any link the button should point to                 |   no      |  the hyperlink      |  javascript: void(0);     |
| target          | Anchor target values                                |   no      |  any css properties |  null     |
| type            | Any inline styles you wish to add                   |   no      |  any css properties |  null     |
| size            | Any inline styles you wish to add                   |   no      |  any css properties |  null     |
| expanded        | Any inline styles you wish to add                   |   no      |  yes                |  null     |
| disabled        | Any inline styles you wish to add                   |   no      |  yes                |  null     |
| hollow          | Any inline styles you wish to add                   |   no      |  yes                |  null     |
