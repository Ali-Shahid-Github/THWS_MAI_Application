
using System;
using System.Windows.Forms;


namespace File_Compression_Tool
{
    public partial class Form3 : Form
    {
        public Form3()
        {
            InitializeComponent();
        }

        
        private static OpenFileDialog browse= new OpenFileDialog();

        private void DecompressButton1_Click(object sender, EventArgs e)
        {
          
            string path = textBox2.Text.ToString();

            if (browse.FileName == path)
            {
                progressBar1.Value = 25;
                if (Huffman_Algorithm.Start_Decoding(path))
                {
                    progressBar1.Value = 100;
                    MessageBox.Show("Operation Successfull", "File Decompressed Successfully", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    
                }
                else
                {
                    progressBar1.Value = 0;
                    MessageBox.Show("Error Occur", "File Decompressed ", MessageBoxButtons.OK, MessageBoxIcon.Error);
                } 
            }
            else
            {
                progressBar1.Value = 0;
                MessageBox.Show("Invalid Path", "Error:File Name", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
                
        }

        private void backbtn_Click(object sender, EventArgs e)
        {
            this.Hide();
        }

        private void ComBtn_Click(object sender, EventArgs e)
        {
            this.Hide();
            new Form2().Show();
        }

        private void DecBtn_Click(object sender, EventArgs e)
        {
            this.Hide();
            new Form3().Show();
        }

       
        private void jThinButton1_Click(object sender, EventArgs e)
        {
            if (browse.ShowDialog() == DialogResult.OK)
            {
                string directory = browse.FileName;
                textBox2.Text = directory;
            }
        }

        private void progressBar1_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }
    }
}
