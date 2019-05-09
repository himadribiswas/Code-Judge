import java.util.*;
class problem5
{
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        String s=sc.nextLine();
         
        s=s.toUpperCase();
        int l=s.length(),i,j,ct=0,x=0;
        char c=' ';
        for(i=0;i<l;i++)
        {
            c=s.charAt(i);
            if(c==' ')
            ct++;
        }
        String A[]=new String[ct+1],st="",temp="";
        for(i=0;i<l;i++)
        {
            c=s.charAt(i);
            if(c==' '||c=='.'||c=='!'||c=='?')
            {
               
                A[x++]=st;
                st="";
        }
        else
        st+=c;
    }
    
         for(i=0;i<x;i++)
    {
        for(j=0;j<(x-i-1);j++)
        {
            if(A[j].compareTo(A[j+1])>0)
            {
                temp=A[j];
                A[j]=A[j+1];
                A[j+1]=temp;
            }
        }
    }
    for(i=0;i<x;i++)
    System.out.print(A[i]+" ");
}
}
        