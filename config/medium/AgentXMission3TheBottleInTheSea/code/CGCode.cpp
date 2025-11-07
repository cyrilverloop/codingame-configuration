#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    string ciphertext;
    getline(cin, ciphertext);
    int keylength;
    cin >> keylength; cin.ignore();
    string word;
    cin >> word; cin.ignore();

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "key" << endl;
    cout << "first 900 char of plaintext" << endl;
}