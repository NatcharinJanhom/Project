<?php
$cha = $_GET['cha'];
            header('Content-type: application/json');
            if($cha == 'Hypocotyl colour')
            {
                $value = 'hypocotyl_colour';
                $id = 'id_hypocotyl_colour';
            }
            else if($cha == 'Hypocotyl colour intensity')
            {
                $value = 'hypocotyl_colour_intensity';
                $id = 'id_hypocotyl_colour_intensity';
            }
            else if($cha == "Flesh colour intensity")
            {
                $value = 'flesh_colour_intensity';
                $id = 'id_flesh_colour_intensity';
            }
            else if($cha == "Flesh colour of peiricarp (interior)")
            {
                $value = 'flesh_colour_of_peiricarp_interior';
                $id = 'id_flesh_colour_of_peiricarp_interior';
            }
            else if($cha == "Number of leaves under 1st inflorescence")
            {
                $value = 'number_of_leaves_under_1st_inflorescence';
                $id = 'id_number_of_leaves_under_1st_inflorescence';
            }
            else if($cha == "Blossom end scar condition")
            {
                $value = 'blossom_end_scar_condition';
                $id = 'id_blossom_end_scar_condition';
            }
            else if($cha == "Blotchy ripening")
            {
                $value = 'blotchy_ripening';
                $id = 'id_blotchy_ripening';
            }
            else if($cha == "Colour (intensity) of core")
            {
                $value = 'colour_intensity_of_core';
                $id = 'id_colour_intensity_of_core';
            }
            else if($cha == "Concentric cracking")
            {
                $value = 'concentric_cracking';
                $id = '	id_concentric_cracking';
            }
            else if($cha == "Corolla blossom type")
            {
                $value = 'corolla_blossom_type';
                $id = 'id_Corolla_colour';
            }
            else if($cha == "Corolla colour")
            {
                $value = 'Corolla_colour';
                $id = 'id_Corolla_colour';
            }
            else if($cha == 'Easiness of fruit to detach from pedicel')
            {
                $value = 'easiness_of_fruit_to_detach_from_pedicel';
                $id = 'id_easiness_of_fruit_to_detach_from_pedicel';
            }
            else if($cha == 'Easiness of fruit wall (skin) to be peeled')
            {
                $value = 'easiness_of_fruit_wall_skin_to_be_peeled';
                $id = 'id_easiness_of_fruit_wall_skin_to_be_peeled';
            }
            else if($cha == 'Exterior colour of immature fruit')
            {
                $value = 'exterior_colour_of_immature_fruit';
                $id = 'id_exterior_colour_of_immature_fruit';
            }
            else if($cha == 'Exterior colour of mature fruit')
            {
                $value = 'exterior_colour_of_mature_fruit';
                $id = 'id_exterior_colour_of_mature_fruit';
            }
            else if($cha == 'Foliage density')
            {
                $value = 'foliage_density';
                $id = 'id_foliage_density';
            }
            else if($cha == 'Fruit blossom end shape')
            {
                $value = 'fruit_blossom_end_shape';
                $id = 'id_fruit_blossom_end_shape';
            }
            else if($cha == 'Fruit cross-sectional shape')
            {
                $value = 'fruit_cross_sectional_shape';
                $id = 'id_fruit_cross_sectional_shape';
            }
            else if($cha == 'Fruit cross-sectional shape')
            {
                $value = 'fruit_cross_sectional_shape';
                $id = 'id_fruit_cross_sectional_shape';
            }
            else if($cha == 'Fruit fasciation')
            {
                $value = 'fruit_fasciation';
                $id = 'id_fruit_fasciation';
            }
            else if($cha == 'Fruit firmness (after storage)')
            {
                $value = 'fruit_firmness_after_storage';
                $id = 'id_fruit_firmness_after_storage';
            }
            else if($cha == 'Fruit firmness (after storage)')
            {
                $value = 'fruit_firmness_after_storage';
                $id = 'id_fruit_firmness_after_storage';
            }
            else if($cha == 'Fruit pubescence')
            {
                $value = 'fruit_pubescence';
                $id = 'fruit_pubescence';
            }
            else if($cha == 'Fruit shoulder shape')
            {
                $value = 'fruit_shoulder_shape';
                $id = 'id_fruit_shoulder_shape';
            }
            else if($cha == 'Fruit size')
            {
                $value = 'fruit_size';
                $id = 'id_fruit_size';
            }
            else if($cha == 'Fruit size homogeneity')
            {
                $value = '';
                $id = '';
            }
            else if($cha == 'Hypocotyl pubescence')
            {
                $value = 'hypocotyl_pubescence';
                $id = 'id_hypocotyl_pubescence';
            }
            else if($cha == 'Inflorescence type')
            {
                $value = 'inflorescence_type';
                $id = 'id_inflorescence_type';
            }
            else if($cha == 'Intensity of exterior colour')
            {
                $value = 'Intensity_of_exterior_colour';
                $id = 'id_Intensity_of_exterior_colour';
            }
            else if($cha == 'Intensity of greenback')
            {
                $value = '';
                $id = '';
            }
            else if($cha == 'Leaf attitude')
            {
                $value = 'leaf_attitude';
                $id = 'id_leaf_attitude';
            }
            else if($cha == 'Leaf type')
            {
                $value = 'leaf_type';
                $id = 'id_leaf_type';
            }
            else if($cha == 'Plant growth type')
            {
                $value = 'plant_growth_type';
                $id = 'id_plant_growth_type';
            }
            else if($cha == 'Predominant fruit shape')
            {
                $value = 'predominant_fruit_shape';
                $id = 'id_predominant_fruit_shape';
            }
            else if($cha == 'Puffiness appearance')
            {
                $value = 'puffiness_appearance';
                $id = 'id_puffiness_appearance';
            }
            else if($cha == 'Radial cracking')
            {
                $value = 'radial_cracking';
                $id = 'id_radial_cracking';
            }
            else if($cha == 'Ribbing at calyx end')
            {
                $value = 'ribbing_at_calyx_end';
                $id = 'id_ribbing_at_calyx_end';
            }
            else if($cha == 'Secondary fruit shape')
            {
                $value = 'secondary_fruit_shape';
                $id = 'id_secondary_fruit_shape';
            }
            else if($cha == 'Seed colour')
            {
                $value = 'seed_colour';
                $id = 'id_seed_colour';
            }
            else if($cha == 'Seed shape')
            {
                $value = '';
                $id = '';
            }
            else if($cha == 'Shape of pistil scar')
            {
                $value = 'shape_of_pistil_scar';
                $id = 'id_shape_of_pistil_scar';
            }
            else if($cha == 'Skin colour of ripe fruit')
            {
                $value = 'skin_colour_of_ripe_fruit';
                $id = 'id_skin_colour_of_ripe_fruit';
            }
            else if($cha == 'Stem pubescence density')
            {
                $value = 'stem_pubescence_density';
                $id = 'id_stem_pubescence_density';
            }

            else if($cha == 'Style hairiness')
            {
                $value = 'style_hairiness';
                $id = 'id_style_hairiness';
            }
            else if($cha == 'Style position')
            {
                $value = 'style_position';
                $id = 'id_style_position';
            }

            else if($cha == 'Style shape')
            {
                $value = 'style_shape';
                $id = 'id_style_shape';
            }
            class conDb {
                private static $instance = NULL;
                private static $dsn = "mysql:dbname=tomatoes;host=localhost";
                private static $user = "root";
                private static $pass = "";
                    private function __construct() {}
                    private function __clone() {}
                    public static function getInstance() {
                    if (!isset(self::$instance)) {
                        self::$instance = new PDO(self::$dsn,self::$user,self::$pass);
                        self::$instance->exec("set names utf8");
                    }
                    return self::$instance;
                    }
                }
            $sql = "SELECT cha_data_tomato.$value AS cha,COUNT(cha_data_tomato.$value) as count_sum 
            FROM `cha_data_tomato` 
            WHERE cha_data_tomato.$value IS NOT NULL
            GROUP BY  cha_data_tomato.$value 
            ORDER BY count_sum DESC";
            $con = ConDb::getInstance();
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $data = array();
            foreach($result as $key=>$value)
            {
                $data[] = $value;
            }
            //print_r($dataNode);
            ob_end_clean();
            print json_encode($data);
?>