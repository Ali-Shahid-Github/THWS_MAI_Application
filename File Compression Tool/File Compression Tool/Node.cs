using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace File_Compression_Tool
{
    public class Node
    {
        private int freq;
        public int Freq { get; set; }

        private char character_Data;
        public char Character_Data { get; set; }

        private Node left;
        public Node Left { get; set; }

        private Node right;
        public Node Right { get; set; }

        public Node()
        {
            Freq = -1;
            Left = null;
            Right = null;
            Character_Data = '\0';
        }


        public Node(int fre)
        {
            Freq = fre;
            Left = null;
            Right = null;
            Character_Data = '\0';
        }

        public Node(int fre, char ch)
        {
            Freq = fre;
            Left = null;
            Right = null;
            Character_Data = ch;
        }

        public Node(int fre, Node left_Node, Node right_Node, char ch)
        {
            Freq = fre;
            Left = left_Node;
            Right = right_Node;
            Character_Data = ch;


        }

    }
}
