/*

CS311S20PID13

2018-CS-104
2018-CS-111
File Compression Tool
CS311- Analysis of Algoirthm
Instructor: Respected, Sir Samyan Qayyum Wala


*/


using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;
using System.Windows.Forms;
using System.Text.RegularExpressions;
using System.Data;

namespace File_Compression_Tool
{
    class Huffman_Algorithm
    {
        private static Node tree_Root;
        public static Node Tree_Root { get; set; }
        private static char[] characters;
        private static int[] frequency;
        private static string input_file_data;
        private static int compress_file_size;

        // this is used for storing the codes in the file
        public static Dictionary<char, string> character_codes = new Dictionary<char, string>();


        public Huffman_Algorithm()
        {
            Tree_Root = null;
			compress_file_size=0;
			input_file_data="";
        }

        /* ******************************************

            Read_file:
        Input: string path, it saves the path of the input file
        Output: it return the length of the file

        This function reads the input file and count the character frequency
        and saved it
          ****************************************** */

        private static int Read_File(string path)
        {
            input_file_data = File.ReadAllText(path);
            if (input_file_data.Length == 0)
            {
                MessageBox.Show("We ran into problem while reading the file's data", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return -1;
            }

            Dictionary<char, int> dict = new Dictionary<char, int>();
            foreach (char character in input_file_data)
            {
                if (dict.ContainsKey(character))
                    dict[character] = dict[character] + 1;
                else
                    dict.Add(character, 1);
            }

            //sorting the arrays into ascending order and saving class variables
            dict = dict.OrderBy(x => x.Value).ToDictionary(x => x.Key, x => x.Value);

            characters = dict.Keys.ToArray();
            frequency = dict.Values.ToArray();

            return input_file_data.Length;

        }

        /* ******************************************

               Generate_Tree:
            Input: array of frequency and character
            Output: void

            This function generate the BST tree by using the frequency 


              ****************************************** */

        private static bool Generate_Tree(int[] freq, char[] ch)
        {
             if(ch.Length==1)
            {
                Node n1 = new Node(freq[0], ch[0]);
                Tree_Root = n1;
                return true;
            }  
            else if (ch.Length > 1)
            {
                int i = 0;
                int sum = 0;
                Tree_Root = null;

                while (i < freq.Length)
                {
                    if (Tree_Root == null)
                    {
                        Node n1 = new Node(freq[i], ch[i]);

                        Node n2 = new Node(freq[i + 1], ch[i + 1]);

                        Node temp = new Node((freq[i] + freq[i + 1]), n1, n2, '\0');

                        Tree_Root = temp;
                        sum = freq[i] + freq[i + 1];
                        i += 2;

                    }
                    else
                    {
                        Node n1 = new Node(freq[i], ch[i]);

                        Node n2 = new Node((freq[i] + sum), '\0');

                        if (freq[i] > sum)
                        {
                            n2.Left = Tree_Root;
                            n2.Right = n1;
                        }
                        else
                        {
                            n2.Right = Tree_Root;
                            n2.Left = n1;
                        }

                        sum = freq[i] + sum;
                        Tree_Root = n2;
                        i++;
                    }
                }
                return true;
            }
            else
                return false;


        }

        /* ******************************************

                Get_Code:
            Input: int type of frquency and character
            Output: it return the length of the file

            This function reads the input file and count the character frequency
            and saved it


              ****************************************** */

        private static string Get_Code(int freq, char ch)
        {
            Node temp_root = new Node();
            temp_root = Tree_Root;
            string result = "";      
            try
            {
                 if (characters.Length==1)
                {
                    return "\0";               
                }
                else
                {
                    while (temp_root != null)
                    {
                        if (temp_root.Left.Freq == freq && temp_root.Left.Character_Data == ch)
                        {
                            result += '0';
                            return result;
                        }
                        else if (temp_root.Right.Freq == freq && temp_root.Right.Character_Data == ch)
                        {
                            result += '1';
                            return result;
                        }
                        else if (temp_root.Left.Left == null && temp_root.Right.Left != null)
                        {
                            temp_root = temp_root.Right;
                            result += '1';
                        }
                        else if (temp_root.Left.Left != null && temp_root.Right.Right == null)
                        {
                            temp_root = temp_root.Left;
                            result += '0';
                        }
                        else
                            return result;
                    }
                }
            }
            catch (Exception e)
            {
                MessageBox.Show("Something went wrong: " + e.Message,"Error");
                return "\0";
            }


            return "\0";
        }

      
        /* ******************************************
             Create_Compress_File:
            Input: string path,
            Output: true/false

            This function create the compressed file of the given
            file and then save into the file name as passed in the
            parameter

              ****************************************** */

        private static bool Create_Compress_File(string path)
        {
			string output = "**";
            try
            {
                
                foreach (var character in input_file_data)
                {
                    string ch = character_codes[character];
                    if (character_codes.ContainsKey(character))
                    {
						if (ch.Length > 8)
                        {
                            int length = 0;
                            if (ch[ch.Length - 1] == '1')
                                length = ch.Length;
                            else
                                length = ch.Length - 1;

                            int remove_counter = 0; int insert_counter = 0;
                            int partition = length / 8;             // 4 is the size were we combining the redundtant bits

                            for (int i = 0; i < partition; i++)
                            {
                                ch = ch.Remove(remove_counter++, 8);
                                ch = ch.Insert(insert_counter++, "#");

                            }
                            output += ch;
                        }
                        else
                            output += ch;

                        compress_file_size += ch.Length;


                        if (output.Length >= 50000)
                        {
                            File.AppendAllText(path, output);
                            output = "";

                        }
                    }
                }
                File.AppendAllText(path, output);
            }
            catch (Exception e)
            {
                MessageBox.Show("Something went wrong: " + e.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return false;
            }

            return true;
        }

        /* ******************************************

            Create_Encoded_Scheme_File:
            Input: string path,
            Output: true/false

            This function create the encoded file of the given
            file and then save into the file name as passed in the
            parameter it saves the character and its frequency also
            it can save the codes of each character


              ****************************************** */

        private static bool Create_Encoded_Scheme_File(string path)
        {
            path = path.Remove(path.IndexOf('.'));

            path += "_compressedFile.txt";

            string output = "";
            File.WriteAllText(path, "");
            try
            {
				
            for (long i = 0; i < frequency.Length; i++)
                output += characters[i] + "=" + frequency[i] + '`';

			}
			catch (Exception e)
            {
                MessageBox.Show("Something went wrong during setting the frequenceis: " + e.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return false;
            }
			
            try
            {
                File.WriteAllText(path, output);
            }
            catch (Exception e)
            {
                MessageBox.Show("Something went wrong: " + e.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return false;
            }

            return Create_Compress_File(path);
        }

        private static bool Decode(string data, string path)
        {
            if (data.Length == 0)
                return false;                    //file is empty we are returnig form it
            else
            {
                string result = "";
				File.WriteAllText(path, "");
                Node temp = new Node();                         //temp node for traversing the tree and find the value
                temp = Tree_Root;
                try
                {
                    string current_data = "";
                    foreach (var ch in data)
                    {
                        if (ch == '0')
                            temp = temp.Left;
                        else if (ch == '1')
                            temp = temp.Right;
                        else
                        {
                            if (ch == '#')
                            {
                                for (int i = 0; i < 4; i++)
                                    temp = temp.Right;
                            }
                        }
						if (temp.Left == null && temp.Right == null)
                        {
                            if (temp.Character_Data != '\r')            //to skiping the additional \r in the file
                            {
                                result += temp.Character_Data;
                                if (result.Length >= 50000)
                                {
                                    File.AppendAllText(path, result);
                                    result = "";
                                }

                                temp = Tree_Root;
                            }
                            temp = Tree_Root;
                        }
                    }
                    File.AppendAllText(path, result);
                }
                catch (Exception e)
                {
                    MessageBox.Show("Something went wrong: " + e.Message);
                    return false;
                }

                return true;

            }
        }

        /* ******************************************

            Start_Decoding:
            Input: string path1 and path2
            Output: void

            This function takes the compressed and coded sceme file
            and then start applying the decoding functions
                -> Generate_Tree and Decode
            and then it saves the orignal file

              ****************************************** */

        public static bool Start_Decoding(string path)
        {

            string data = File.ReadAllText(path);
			
            Dictionary<char, int> decode_data = new Dictionary<char, int>();
            
			char temp_char = '\0';
            int i = 0;
			
            try
            {
                for (i = 0; i < data.Length; i++)
                {
                    if (data[i] == '=' && data[i + 1] != '=')
                    {
                        string temp_freq = "";
                        i++;
                        while (data[i] != '`')
                        {
                            temp_freq += data[i];
                            i++;
                        }

                        decode_data.Add(temp_char, Convert.ToInt32(temp_freq));
                        if (data[i + 1] == '*' && data[i + 2] == '*')		//these two consectutive characters show that it is the end of freq and chara data
                        {
                            i += 2;
                            break;		//getting out this loop and than we go to decode the file
                        }
                    }
                    else if (data[i] != '`')
                    {
                        temp_char = data[i];
                    }
                }
            }
            catch (Exception e)
            {
                MessageBox.Show("We ran into problem while reading the file's data", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                decode_data.Clear();
                return false;
            }

            string compressed_data = data.Substring(i + 1);
            int[] freq = decode_data.Values.ToArray();
            char[] chare = decode_data.Keys.ToArray();
            if (Generate_Tree(freq, chare))
            {
                string file_type = path.Substring(path.IndexOf('.'));     //saving and renaming the file name
                path = path.Remove(path.IndexOf('_'));

                path += "_original" + file_type;

                if (Decode(compressed_data, path))        //return the original text
                {
                    decode_data.Clear();
                    return true;
                }
                else
                    return false;
            }
            else
                return false;
        }

        /* ******************************************

        Start_Encoding:
        Input: string path1
        Output: void

        This function original given input file and
	    then start applying the encoding functons functions
		-> Generate_Tree 
        -> Get_Code
        -> Create_Compress_File
        ->Create_Encoded_Scheme_File


          ****************************************** */
       

        public static bool Start_Encoding(string path)
        {
            int input_file = Read_File(path);
            if (input_file > 0)
            {              
                if (Generate_Tree(frequency, characters))
                {
                     for (int i = 0; i < frequency.Length; i++)      // finding the code of each character from the tree
                    {
                        string code = Get_Code(frequency[i], characters[i]);
                        character_codes.Add(characters[i], code);               //saving code in the character_code dictionary
                    }

                    if (Create_Encoded_Scheme_File(path))
                    {
                        string messagebox_message = "Operation Successfull: \nThe Original File size is " + input_file * 8 + " Bits " +
                                "\nCompressed File size is " + compress_file_size + " bits";


                        MessageBox.Show(messagebox_message, "File Compressed Successfully", MessageBoxButtons.OK, MessageBoxIcon.Information);

                        //clearing the all data in the variables
                        clear_data();
                        return true;
                    }
                    else
                    {
                        clear_data();
                        return false;
                    }
                }
                else
                {
                    MessageBox.Show("We are ran into problem during the process", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                    clear_data();
                    return false;
                }
            }
            else
            {
                MessageBox.Show("We ran into problem while reading the file's data", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                clear_data();
                return false;
            }
        }
        private static void clear_data()
        {
            compress_file_size=0;
            character_codes.Clear();
            Array.Clear(characters, 0, characters.Length);
            Array.Clear(frequency, 0, frequency.Length);
        }
    }
}


