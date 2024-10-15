using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace File_Compression_Tool
{
    
    public partial class Form1 : Form
    {
        public Point mouseLoaction;
        public Form1()
        {
            InitializeComponent();
        }
       
        private void Compressbutton_Click(object sender, EventArgs e)
        {
            new Form2().Show();            
        }


        private void Decompressbutton_Click_1(object sender, EventArgs e)
        {
            new Form3().Show();
        }
    }
}
