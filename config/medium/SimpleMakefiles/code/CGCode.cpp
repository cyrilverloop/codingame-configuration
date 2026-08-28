#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n_files;
    cin >> n_files; cin.ignore();
    for (int i = 0; i < n_files; i++) {
        string preexisting_file;
        int file_time;
        cin >> preexisting_file >> file_time; cin.ignore();
    }
    int n_goal_targets;
    cin >> n_goal_targets; cin.ignore();
    for (int i = 0; i < n_goal_targets; i++) {
        string goal_target;
        cin >> goal_target; cin.ignore();
    }
    int n_lines;
    cin >> n_lines; cin.ignore();
    for (int i = 0; i < n_lines; i++) {
        string makefile_line;
        getline(cin, makefile_line);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "[Build complete]" << endl;
}