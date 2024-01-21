<!DOCTYPE html>
<html>
    <head>
        <title>XML Expat</title>
    </head>
    <body>
        <?php
        $parser = xml_parser_create();

        function start($parser, $element_name, $element_attr) {
            switch($element_name) {
                case "NOTE":
                    echo "<h2>-- Note --</h2>";
                    break;
                    case "TO":
                        echo "<p>To : ";
                        break;
                        case "FROM":
                            echo "<p>From : ";
                            break;
                            case "HEADING":
                                echo "<p>Heading : ";
                                break;
                                case "BODY":
                                    echo "<p>Message : ";
                                    break;
            }
        }

        function stop($parser, $element_name) {
            switch ($element_name) {
                case "NOTE":
                    break;
                    default:
                    echo "</p>";
            }        
        }

        function char($parser, $data) {
            echo $data;
        }

        xml_set_element_handler($parser, "start", "stop");

        xml_set_character_data_handler($parser, "char");

        $fp = fopen("note.xml", "r");

        while($data = fread($fp, 4096)) {
            xml_parse($parser, $data, feof($fp)) or die(sprintf("XML Error : %s at line $d", xml_error_string(xml_get_error_code($parser)) , xml_get_current_line_number($parser)));
        }

        xml_parser_free($parser);
        ?>
        </body>
    </html>