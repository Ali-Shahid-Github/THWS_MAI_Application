using System;
using System.IO;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace File_Compression_Tool
{

    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
        }

        private static OpenFileDialog browse = new OpenFileDialog();

        private void BrowseButton_Click(object sender, EventArgs e)
        {
           
             browse.CheckFileExists = true;
             browse.CheckPathExists = true;

            if (browse.ShowDialog() == DialogResult.OK)
            {
                string directory = browse.FileName;
                textBox1.Text = directory;
            }
        }

        private void BackButton1_Click(object sender, EventArgs e)
        {
            this.Hide();
        }

        private void Button2_Click(object sender, EventArgs e)
        {
            this.Hide();
            new Form2().Show();
            
        }

        private void buttons3_Click(object sender, EventArgs e)
        {
            this.Hide();
            new Form3().Show();
            
        }

        private void CompressButton1_Click(object sender, EventArgs e)
        {
            string path = textBox1.Text.ToString();
            progressBar1.Value = 10;
            if(browse.FileName==path)
            {
                progressBar1.Value = 25;
                if(Huffman_Algorithm.Start_Encoding(path))
                    progressBar1.Value = 100;
                else
                {
                    progressBar1.Value = 0;
                }
            }
            else
            {
                progressBar1.Value = 0;
                MessageBox.Show("Invalid Path", "Error:File Name", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
           
        }

        private void progressBar1_Click(object sender, EventArgs e)
        {

        }
    }
}
