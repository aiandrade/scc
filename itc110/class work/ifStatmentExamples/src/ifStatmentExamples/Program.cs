using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace ifStatmentExamples
{
    public class Program
    {
        public void Main(string[] args)
        {
            Console.WriteLine("Enter a number");
           int number = int.Parse(Console.ReadLine())

            if(number>20)
            {
                Console.WriteLine("your number is greater than 20");
            }
        }
    }
}
