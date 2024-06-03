<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/card/v1/card.proto

namespace Google\Apps\Card\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Each card is made up of widgets.
 * A widget is a composite object that can represent one of text, images,
 * buttons, and other object types.
 *
 * Generated from protobuf message <code>google.apps.card.v1.Widget</code>
 */
class Widget extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies whether widgets align to the left, right, or center of a column.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Widget.HorizontalAlignment horizontal_alignment = 8;</code>
     */
    protected $horizontal_alignment = 0;
    protected $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Card\V1\TextParagraph $text_paragraph
     *           Displays a text paragraph. Supports simple HTML formatted text. For more
     *           information about formatting text, see
     *           [Formatting text in Google Chat
     *           apps](https://developers.google.com/workspace/chat/format-messages#card-formatting)
     *           and
     *           [Formatting
     *           text in Google Workspace
     *           Add-ons](https://developers.google.com/apps-script/add-ons/concepts/widgets#text_formatting).
     *           For example, the following JSON creates a bolded text:
     *           ```
     *           "textParagraph": {
     *             "text": "  <b>bold text</b>"
     *           }
     *           ```
     *     @type \Google\Apps\Card\V1\Image $image
     *           Displays an image.
     *           For example, the following JSON creates an image with alternative text:
     *           ```
     *           "image": {
     *             "imageUrl":
     *             "https://developers.google.com/workspace/chat/images/quickstart-app-avatar.png",
     *             "altText": "Chat app avatar"
     *           }
     *           ```
     *     @type \Google\Apps\Card\V1\DecoratedText $decorated_text
     *           Displays a decorated text item.
     *           For example, the following JSON creates a decorated text widget showing
     *           email address:
     *           ```
     *           "decoratedText": {
     *             "icon": {
     *               "knownIcon": "EMAIL"
     *             },
     *             "topLabel": "Email Address",
     *             "text": "sasha&#64;example.com",
     *             "bottomLabel": "This is a new Email address!",
     *             "switchControl": {
     *               "name": "has_send_welcome_email_to_sasha",
     *               "selected": false,
     *               "controlType": "CHECKBOX"
     *             }
     *           }
     *           ```
     *     @type \Google\Apps\Card\V1\ButtonList $button_list
     *           A list of buttons.
     *           For example, the following JSON creates two buttons. The first
     *           is a blue text button and the second is an image button that opens a
     *           link:
     *           ```
     *           "buttonList": {
     *             "buttons": [
     *               {
     *                 "text": "Edit",
     *                 "color": {
     *                   "red": 0,
     *                   "green": 0,
     *                   "blue": 1,
     *                   "alpha": 1
     *                 },
     *                 "disabled": true,
     *               },
     *               {
     *                 "icon": {
     *                   "knownIcon": "INVITE",
     *                   "altText": "check calendar"
     *                 },
     *                 "onClick": {
     *                   "openLink": {
     *                     "url": "https://example.com/calendar"
     *                   }
     *                 }
     *               }
     *             ]
     *           }
     *           ```
     *     @type \Google\Apps\Card\V1\TextInput $text_input
     *           Displays a text box that users can type into.
     *           For example, the following JSON creates a text input for an email
     *           address:
     *           ```
     *           "textInput": {
     *             "name": "mailing_address",
     *             "label": "Mailing Address"
     *           }
     *           ```
     *           As another example, the following JSON creates a text input for a
     *           programming language with static suggestions:
     *           ```
     *           "textInput": {
     *             "name": "preferred_programing_language",
     *             "label": "Preferred Language",
     *             "initialSuggestions": {
     *               "items": [
     *                 {
     *                   "text": "C++"
     *                 },
     *                 {
     *                   "text": "Java"
     *                 },
     *                 {
     *                   "text": "JavaScript"
     *                 },
     *                 {
     *                   "text": "Python"
     *                 }
     *               ]
     *             }
     *           }
     *           ```
     *     @type \Google\Apps\Card\V1\SelectionInput $selection_input
     *           Displays a selection control that lets users select items. Selection
     *           controls can be checkboxes, radio buttons, switches, or dropdown menus.
     *           For example, the following JSON creates a dropdown menu that lets users
     *           choose a size:
     *           ```
     *           "selectionInput": {
     *             "name": "size",
     *             "label": "Size"
     *             "type": "DROPDOWN",
     *             "items": [
     *               {
     *                 "text": "S",
     *                 "value": "small",
     *                 "selected": false
     *               },
     *               {
     *                 "text": "M",
     *                 "value": "medium",
     *                 "selected": true
     *               },
     *               {
     *                 "text": "L",
     *                 "value": "large",
     *                 "selected": false
     *               },
     *               {
     *                 "text": "XL",
     *                 "value": "extra_large",
     *                 "selected": false
     *               }
     *             ]
     *           }
     *           ```
     *     @type \Google\Apps\Card\V1\DateTimePicker $date_time_picker
     *           Displays a widget that lets users input a date, time, or date and time.
     *           For example, the following JSON creates a date time picker to schedule an
     *           appointment:
     *           ```
     *           "dateTimePicker": {
     *             "name": "appointment_time",
     *             "label": "Book your appointment at:",
     *             "type": "DATE_AND_TIME",
     *             "valueMsEpoch": "796435200000"
     *           }
     *           ```
     *     @type \Google\Apps\Card\V1\Divider $divider
     *           Displays a horizontal line divider between widgets.
     *           For example, the following JSON creates a divider:
     *           ```
     *           "divider": {
     *           }
     *           ```
     *     @type \Google\Apps\Card\V1\Grid $grid
     *           Displays a grid with a collection of items.
     *           A grid supports any number of columns and items. The number of rows is
     *           determined by the upper bounds of the number items divided by the number
     *           of columns. A grid with 10 items and 2 columns has 5 rows. A grid with 11
     *           items and 2 columns has 6 rows.
     *           [Google Workspace Add-ons and
     *           Chat apps](https://developers.google.com/workspace/extend):
     *           For example, the following JSON creates a 2 column grid with a single
     *           item:
     *           ```
     *           "grid": {
     *             "title": "A fine collection of items",
     *             "columnCount": 2,
     *             "borderStyle": {
     *               "type": "STROKE",
     *               "cornerRadius": 4
     *             },
     *             "items": [
     *               {
     *                 "image": {
     *                   "imageUri": "https://www.example.com/image.png",
     *                   "cropStyle": {
     *                     "type": "SQUARE"
     *                   },
     *                   "borderStyle": {
     *                     "type": "STROKE"
     *                   }
     *                 },
     *                 "title": "An item",
     *                 "textAlignment": "CENTER"
     *               }
     *             ],
     *             "onClick": {
     *               "openLink": {
     *                 "url": "https://www.example.com"
     *               }
     *             }
     *           }
     *           ```
     *     @type \Google\Apps\Card\V1\Columns $columns
     *           Displays up to 2 columns.
     *           To include more than 2 columns, or to use rows, use the `Grid` widget.
     *           For example, the following JSON creates 2 columns that each contain
     *           text paragraphs:
     *           ```
     *           "columns": {
     *             "columnItems": [
     *               {
     *                 "horizontalSizeStyle": "FILL_AVAILABLE_SPACE",
     *                 "horizontalAlignment": "CENTER",
     *                 "verticalAlignment": "CENTER",
     *                 "widgets": [
     *                   {
     *                     "textParagraph": {
     *                       "text": "First column text paragraph"
     *                     }
     *                   }
     *                 ]
     *               },
     *               {
     *                 "horizontalSizeStyle": "FILL_AVAILABLE_SPACE",
     *                 "horizontalAlignment": "CENTER",
     *                 "verticalAlignment": "CENTER",
     *                 "widgets": [
     *                   {
     *                     "textParagraph": {
     *                       "text": "Second column text paragraph"
     *                     }
     *                   }
     *                 ]
     *               }
     *             ]
     *           }
     *           ```
     *     @type int $horizontal_alignment
     *           Specifies whether widgets align to the left, right, or center of a column.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Card\V1\Card::initOnce();
        parent::__construct($data);
    }

    /**
     * Displays a text paragraph. Supports simple HTML formatted text. For more
     * information about formatting text, see
     * [Formatting text in Google Chat
     * apps](https://developers.google.com/workspace/chat/format-messages#card-formatting)
     * and
     * [Formatting
     * text in Google Workspace
     * Add-ons](https://developers.google.com/apps-script/add-ons/concepts/widgets#text_formatting).
     * For example, the following JSON creates a bolded text:
     * ```
     * "textParagraph": {
     *   "text": "  <b>bold text</b>"
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.TextParagraph text_paragraph = 1;</code>
     * @return \Google\Apps\Card\V1\TextParagraph|null
     */
    public function getTextParagraph()
    {
        return $this->readOneof(1);
    }

    public function hasTextParagraph()
    {
        return $this->hasOneof(1);
    }

    /**
     * Displays a text paragraph. Supports simple HTML formatted text. For more
     * information about formatting text, see
     * [Formatting text in Google Chat
     * apps](https://developers.google.com/workspace/chat/format-messages#card-formatting)
     * and
     * [Formatting
     * text in Google Workspace
     * Add-ons](https://developers.google.com/apps-script/add-ons/concepts/widgets#text_formatting).
     * For example, the following JSON creates a bolded text:
     * ```
     * "textParagraph": {
     *   "text": "  <b>bold text</b>"
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.TextParagraph text_paragraph = 1;</code>
     * @param \Google\Apps\Card\V1\TextParagraph $var
     * @return $this
     */
    public function setTextParagraph($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\TextParagraph::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Displays an image.
     * For example, the following JSON creates an image with alternative text:
     * ```
     * "image": {
     *   "imageUrl":
     *   "https://developers.google.com/workspace/chat/images/quickstart-app-avatar.png",
     *   "altText": "Chat app avatar"
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Image image = 2;</code>
     * @return \Google\Apps\Card\V1\Image|null
     */
    public function getImage()
    {
        return $this->readOneof(2);
    }

    public function hasImage()
    {
        return $this->hasOneof(2);
    }

    /**
     * Displays an image.
     * For example, the following JSON creates an image with alternative text:
     * ```
     * "image": {
     *   "imageUrl":
     *   "https://developers.google.com/workspace/chat/images/quickstart-app-avatar.png",
     *   "altText": "Chat app avatar"
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Image image = 2;</code>
     * @param \Google\Apps\Card\V1\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\Image::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Displays a decorated text item.
     * For example, the following JSON creates a decorated text widget showing
     * email address:
     * ```
     * "decoratedText": {
     *   "icon": {
     *     "knownIcon": "EMAIL"
     *   },
     *   "topLabel": "Email Address",
     *   "text": "sasha&#64;example.com",
     *   "bottomLabel": "This is a new Email address!",
     *   "switchControl": {
     *     "name": "has_send_welcome_email_to_sasha",
     *     "selected": false,
     *     "controlType": "CHECKBOX"
     *   }
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.DecoratedText decorated_text = 3;</code>
     * @return \Google\Apps\Card\V1\DecoratedText|null
     */
    public function getDecoratedText()
    {
        return $this->readOneof(3);
    }

    public function hasDecoratedText()
    {
        return $this->hasOneof(3);
    }

    /**
     * Displays a decorated text item.
     * For example, the following JSON creates a decorated text widget showing
     * email address:
     * ```
     * "decoratedText": {
     *   "icon": {
     *     "knownIcon": "EMAIL"
     *   },
     *   "topLabel": "Email Address",
     *   "text": "sasha&#64;example.com",
     *   "bottomLabel": "This is a new Email address!",
     *   "switchControl": {
     *     "name": "has_send_welcome_email_to_sasha",
     *     "selected": false,
     *     "controlType": "CHECKBOX"
     *   }
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.DecoratedText decorated_text = 3;</code>
     * @param \Google\Apps\Card\V1\DecoratedText $var
     * @return $this
     */
    public function setDecoratedText($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\DecoratedText::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A list of buttons.
     * For example, the following JSON creates two buttons. The first
     * is a blue text button and the second is an image button that opens a
     * link:
     * ```
     * "buttonList": {
     *   "buttons": [
     *     {
     *       "text": "Edit",
     *       "color": {
     *         "red": 0,
     *         "green": 0,
     *         "blue": 1,
     *         "alpha": 1
     *       },
     *       "disabled": true,
     *     },
     *     {
     *       "icon": {
     *         "knownIcon": "INVITE",
     *         "altText": "check calendar"
     *       },
     *       "onClick": {
     *         "openLink": {
     *           "url": "https://example.com/calendar"
     *         }
     *       }
     *     }
     *   ]
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.ButtonList button_list = 4;</code>
     * @return \Google\Apps\Card\V1\ButtonList|null
     */
    public function getButtonList()
    {
        return $this->readOneof(4);
    }

    public function hasButtonList()
    {
        return $this->hasOneof(4);
    }

    /**
     * A list of buttons.
     * For example, the following JSON creates two buttons. The first
     * is a blue text button and the second is an image button that opens a
     * link:
     * ```
     * "buttonList": {
     *   "buttons": [
     *     {
     *       "text": "Edit",
     *       "color": {
     *         "red": 0,
     *         "green": 0,
     *         "blue": 1,
     *         "alpha": 1
     *       },
     *       "disabled": true,
     *     },
     *     {
     *       "icon": {
     *         "knownIcon": "INVITE",
     *         "altText": "check calendar"
     *       },
     *       "onClick": {
     *         "openLink": {
     *           "url": "https://example.com/calendar"
     *         }
     *       }
     *     }
     *   ]
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.ButtonList button_list = 4;</code>
     * @param \Google\Apps\Card\V1\ButtonList $var
     * @return $this
     */
    public function setButtonList($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\ButtonList::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Displays a text box that users can type into.
     * For example, the following JSON creates a text input for an email
     * address:
     * ```
     * "textInput": {
     *   "name": "mailing_address",
     *   "label": "Mailing Address"
     * }
     * ```
     * As another example, the following JSON creates a text input for a
     * programming language with static suggestions:
     * ```
     * "textInput": {
     *   "name": "preferred_programing_language",
     *   "label": "Preferred Language",
     *   "initialSuggestions": {
     *     "items": [
     *       {
     *         "text": "C++"
     *       },
     *       {
     *         "text": "Java"
     *       },
     *       {
     *         "text": "JavaScript"
     *       },
     *       {
     *         "text": "Python"
     *       }
     *     ]
     *   }
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.TextInput text_input = 5;</code>
     * @return \Google\Apps\Card\V1\TextInput|null
     */
    public function getTextInput()
    {
        return $this->readOneof(5);
    }

    public function hasTextInput()
    {
        return $this->hasOneof(5);
    }

    /**
     * Displays a text box that users can type into.
     * For example, the following JSON creates a text input for an email
     * address:
     * ```
     * "textInput": {
     *   "name": "mailing_address",
     *   "label": "Mailing Address"
     * }
     * ```
     * As another example, the following JSON creates a text input for a
     * programming language with static suggestions:
     * ```
     * "textInput": {
     *   "name": "preferred_programing_language",
     *   "label": "Preferred Language",
     *   "initialSuggestions": {
     *     "items": [
     *       {
     *         "text": "C++"
     *       },
     *       {
     *         "text": "Java"
     *       },
     *       {
     *         "text": "JavaScript"
     *       },
     *       {
     *         "text": "Python"
     *       }
     *     ]
     *   }
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.TextInput text_input = 5;</code>
     * @param \Google\Apps\Card\V1\TextInput $var
     * @return $this
     */
    public function setTextInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\TextInput::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Displays a selection control that lets users select items. Selection
     * controls can be checkboxes, radio buttons, switches, or dropdown menus.
     * For example, the following JSON creates a dropdown menu that lets users
     * choose a size:
     * ```
     * "selectionInput": {
     *   "name": "size",
     *   "label": "Size"
     *   "type": "DROPDOWN",
     *   "items": [
     *     {
     *       "text": "S",
     *       "value": "small",
     *       "selected": false
     *     },
     *     {
     *       "text": "M",
     *       "value": "medium",
     *       "selected": true
     *     },
     *     {
     *       "text": "L",
     *       "value": "large",
     *       "selected": false
     *     },
     *     {
     *       "text": "XL",
     *       "value": "extra_large",
     *       "selected": false
     *     }
     *   ]
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.SelectionInput selection_input = 6;</code>
     * @return \Google\Apps\Card\V1\SelectionInput|null
     */
    public function getSelectionInput()
    {
        return $this->readOneof(6);
    }

    public function hasSelectionInput()
    {
        return $this->hasOneof(6);
    }

    /**
     * Displays a selection control that lets users select items. Selection
     * controls can be checkboxes, radio buttons, switches, or dropdown menus.
     * For example, the following JSON creates a dropdown menu that lets users
     * choose a size:
     * ```
     * "selectionInput": {
     *   "name": "size",
     *   "label": "Size"
     *   "type": "DROPDOWN",
     *   "items": [
     *     {
     *       "text": "S",
     *       "value": "small",
     *       "selected": false
     *     },
     *     {
     *       "text": "M",
     *       "value": "medium",
     *       "selected": true
     *     },
     *     {
     *       "text": "L",
     *       "value": "large",
     *       "selected": false
     *     },
     *     {
     *       "text": "XL",
     *       "value": "extra_large",
     *       "selected": false
     *     }
     *   ]
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.SelectionInput selection_input = 6;</code>
     * @param \Google\Apps\Card\V1\SelectionInput $var
     * @return $this
     */
    public function setSelectionInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\SelectionInput::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Displays a widget that lets users input a date, time, or date and time.
     * For example, the following JSON creates a date time picker to schedule an
     * appointment:
     * ```
     * "dateTimePicker": {
     *   "name": "appointment_time",
     *   "label": "Book your appointment at:",
     *   "type": "DATE_AND_TIME",
     *   "valueMsEpoch": "796435200000"
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.DateTimePicker date_time_picker = 7;</code>
     * @return \Google\Apps\Card\V1\DateTimePicker|null
     */
    public function getDateTimePicker()
    {
        return $this->readOneof(7);
    }

    public function hasDateTimePicker()
    {
        return $this->hasOneof(7);
    }

    /**
     * Displays a widget that lets users input a date, time, or date and time.
     * For example, the following JSON creates a date time picker to schedule an
     * appointment:
     * ```
     * "dateTimePicker": {
     *   "name": "appointment_time",
     *   "label": "Book your appointment at:",
     *   "type": "DATE_AND_TIME",
     *   "valueMsEpoch": "796435200000"
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.DateTimePicker date_time_picker = 7;</code>
     * @param \Google\Apps\Card\V1\DateTimePicker $var
     * @return $this
     */
    public function setDateTimePicker($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\DateTimePicker::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Displays a horizontal line divider between widgets.
     * For example, the following JSON creates a divider:
     * ```
     * "divider": {
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Divider divider = 9;</code>
     * @return \Google\Apps\Card\V1\Divider|null
     */
    public function getDivider()
    {
        return $this->readOneof(9);
    }

    public function hasDivider()
    {
        return $this->hasOneof(9);
    }

    /**
     * Displays a horizontal line divider between widgets.
     * For example, the following JSON creates a divider:
     * ```
     * "divider": {
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Divider divider = 9;</code>
     * @param \Google\Apps\Card\V1\Divider $var
     * @return $this
     */
    public function setDivider($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\Divider::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Displays a grid with a collection of items.
     * A grid supports any number of columns and items. The number of rows is
     * determined by the upper bounds of the number items divided by the number
     * of columns. A grid with 10 items and 2 columns has 5 rows. A grid with 11
     * items and 2 columns has 6 rows.
     * [Google Workspace Add-ons and
     * Chat apps](https://developers.google.com/workspace/extend):
     * For example, the following JSON creates a 2 column grid with a single
     * item:
     * ```
     * "grid": {
     *   "title": "A fine collection of items",
     *   "columnCount": 2,
     *   "borderStyle": {
     *     "type": "STROKE",
     *     "cornerRadius": 4
     *   },
     *   "items": [
     *     {
     *       "image": {
     *         "imageUri": "https://www.example.com/image.png",
     *         "cropStyle": {
     *           "type": "SQUARE"
     *         },
     *         "borderStyle": {
     *           "type": "STROKE"
     *         }
     *       },
     *       "title": "An item",
     *       "textAlignment": "CENTER"
     *     }
     *   ],
     *   "onClick": {
     *     "openLink": {
     *       "url": "https://www.example.com"
     *     }
     *   }
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Grid grid = 10;</code>
     * @return \Google\Apps\Card\V1\Grid|null
     */
    public function getGrid()
    {
        return $this->readOneof(10);
    }

    public function hasGrid()
    {
        return $this->hasOneof(10);
    }

    /**
     * Displays a grid with a collection of items.
     * A grid supports any number of columns and items. The number of rows is
     * determined by the upper bounds of the number items divided by the number
     * of columns. A grid with 10 items and 2 columns has 5 rows. A grid with 11
     * items and 2 columns has 6 rows.
     * [Google Workspace Add-ons and
     * Chat apps](https://developers.google.com/workspace/extend):
     * For example, the following JSON creates a 2 column grid with a single
     * item:
     * ```
     * "grid": {
     *   "title": "A fine collection of items",
     *   "columnCount": 2,
     *   "borderStyle": {
     *     "type": "STROKE",
     *     "cornerRadius": 4
     *   },
     *   "items": [
     *     {
     *       "image": {
     *         "imageUri": "https://www.example.com/image.png",
     *         "cropStyle": {
     *           "type": "SQUARE"
     *         },
     *         "borderStyle": {
     *           "type": "STROKE"
     *         }
     *       },
     *       "title": "An item",
     *       "textAlignment": "CENTER"
     *     }
     *   ],
     *   "onClick": {
     *     "openLink": {
     *       "url": "https://www.example.com"
     *     }
     *   }
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Grid grid = 10;</code>
     * @param \Google\Apps\Card\V1\Grid $var
     * @return $this
     */
    public function setGrid($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\Grid::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Displays up to 2 columns.
     * To include more than 2 columns, or to use rows, use the `Grid` widget.
     * For example, the following JSON creates 2 columns that each contain
     * text paragraphs:
     * ```
     * "columns": {
     *   "columnItems": [
     *     {
     *       "horizontalSizeStyle": "FILL_AVAILABLE_SPACE",
     *       "horizontalAlignment": "CENTER",
     *       "verticalAlignment": "CENTER",
     *       "widgets": [
     *         {
     *           "textParagraph": {
     *             "text": "First column text paragraph"
     *           }
     *         }
     *       ]
     *     },
     *     {
     *       "horizontalSizeStyle": "FILL_AVAILABLE_SPACE",
     *       "horizontalAlignment": "CENTER",
     *       "verticalAlignment": "CENTER",
     *       "widgets": [
     *         {
     *           "textParagraph": {
     *             "text": "Second column text paragraph"
     *           }
     *         }
     *       ]
     *     }
     *   ]
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Columns columns = 11;</code>
     * @return \Google\Apps\Card\V1\Columns|null
     */
    public function getColumns()
    {
        return $this->readOneof(11);
    }

    public function hasColumns()
    {
        return $this->hasOneof(11);
    }

    /**
     * Displays up to 2 columns.
     * To include more than 2 columns, or to use rows, use the `Grid` widget.
     * For example, the following JSON creates 2 columns that each contain
     * text paragraphs:
     * ```
     * "columns": {
     *   "columnItems": [
     *     {
     *       "horizontalSizeStyle": "FILL_AVAILABLE_SPACE",
     *       "horizontalAlignment": "CENTER",
     *       "verticalAlignment": "CENTER",
     *       "widgets": [
     *         {
     *           "textParagraph": {
     *             "text": "First column text paragraph"
     *           }
     *         }
     *       ]
     *     },
     *     {
     *       "horizontalSizeStyle": "FILL_AVAILABLE_SPACE",
     *       "horizontalAlignment": "CENTER",
     *       "verticalAlignment": "CENTER",
     *       "widgets": [
     *         {
     *           "textParagraph": {
     *             "text": "Second column text paragraph"
     *           }
     *         }
     *       ]
     *     }
     *   ]
     * }
     * ```
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Columns columns = 11;</code>
     * @param \Google\Apps\Card\V1\Columns $var
     * @return $this
     */
    public function setColumns($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\Columns::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Specifies whether widgets align to the left, right, or center of a column.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Widget.HorizontalAlignment horizontal_alignment = 8;</code>
     * @return int
     */
    public function getHorizontalAlignment()
    {
        return $this->horizontal_alignment;
    }

    /**
     * Specifies whether widgets align to the left, right, or center of a column.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Widget.HorizontalAlignment horizontal_alignment = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setHorizontalAlignment($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Card\V1\Widget\HorizontalAlignment::class);
        $this->horizontal_alignment = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

}

